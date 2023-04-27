<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;

class GitHubService
{
	public static function getBaseCachedUsers(): Collection
	{
		$baseUsersList = ['wallysonn', 'diego3g', 'filipedeschamps', 'rmanguinho']; //base users to fetch from api
		$cacheTime = 60 * 60 * 24; // 1d cache time for the base users
		$baseUsers = [];
		if (Cache::has('ghusers')) {
			return Cache::get('ghusers');
		} else {
			foreach ($baseUsersList as $user) {
				$res = Http::get("https://api.github.com/users/$user");
				//validating the response from the api
				$userFromAPI = Validator::make(
					$res->json(),
					[
						'id' => 'required|integer',
						'login' => 'required|string',
						'name' => 'nullable|string',
						'email' => 'email|nullable',
						'avatar_url' => 'nullable|url',
						'gravatar_id' => 'string|nullable',
						'url' => 'nullable|url',
						'html_url' => 'nullable|url',
						'followers_url' => 'nullable|url',
						'following_url' => 'nullable|string',
						'gists_url' => 'nullable|string',
						'starred_url' => 'nullable|string',
						'subscriptions_url' => 'nullable|url',
						'organizations_url' => 'nullable|url',
						'repos_url' => 'nullable|url',
						'events_url' => 'nullable|string',
						'received_events_url' => 'nullable|url',
						'type' => 'nullable|string',
						'site_admin' => 'nullable|boolean',
						'company' => 'nullable|string',
						'blog' => 'nullable|url',
						'location' => 'nullable|string',
						'hireable' => 'nullable|boolean',
						'bio' => 'nullable|string',
						'twitter_username' => 'nullable|string',
						'public_repos' => 'nullable|integer',
						'public_gists' => 'nullable|integer',
						'followers' => 'nullable|integer',
						'following' => 'nullable|integer',
						'created_at' => 'nullable|date',
						'updated_at' => 'nullable|date',
					]
				);
				$baseUsers[] = $userFromAPI->validate();
			}
		}

		return Cache::remember('ghusers', $cacheTime, function () use ($baseUsers) {
			return collect($baseUsers);
		});
	}

	public static function getCachedUser(string $login)
	{
		$cacheTime = 60 * 60; // 1h cache time
		if (Cache::has($login)) {
			return Cache::get($login);
		} else {
			$res = Http::get("https://api.github.com/users/$login");
			//validating the response from the api
			$userFromAPI = Validator::make(
				$res->json(),
				[
					'id' => 'required|integer',
					'login' => 'required|string',
					'name' => 'nullable|string',
					'email' => 'email|nullable',
					'avatar_url' => 'nullable|url',
					'gravatar_id' => 'string|nullable',
					'url' => 'nullable|url',
					'html_url' => 'nullable|url',
					'followers_url' => 'nullable|url',
					'following_url' => 'nullable|string',
					'gists_url' => 'nullable|string',
					'starred_url' => 'nullable|string',
					'subscriptions_url' => 'nullable|url',
					'organizations_url' => 'nullable|url',
					'repos_url' => 'nullable|url',
					'events_url' => 'nullable|string',
					'received_events_url' => 'nullable|url',
					'type' => 'nullable|string',
					'site_admin' => 'nullable|boolean',
					'company' => 'nullable|string',
					'blog' => 'nullable|url',
					'location' => 'nullable|string',
					'hireable' => 'nullable|boolean',
					'bio' => 'nullable|string',
					'twitter_username' => 'nullable|string',
					'public_repos' => 'nullable|integer',
					'public_gists' => 'nullable|integer',
					'followers' => 'nullable|integer',
					'following' => 'nullable|integer',
					'created_at' => 'nullable|date',
					'updated_at' => 'nullable|date',
				]
			);
			$user = $userFromAPI->validate();
			return Cache::remember($login, $cacheTime, function () use ($user) {
				return $user;
			});
		}
	}

	public static function getCachedRepos(string $login)
	{
		//basic caching for repos since it's not the focus of the test and sail and windows don't work well together
		return Cache::remember("ghuser-$login-repos", 60 * 60 * 24, function () use ($login) {
			return Http::get("https://api.github.com/users/$login/repos")->json();
		});
	}
}
