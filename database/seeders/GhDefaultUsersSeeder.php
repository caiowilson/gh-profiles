<?php

namespace Database\Seeders;

use App\Models\GhUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GhDefaultUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    //not using a factory since we are seeding the same users everytime
    protected $ghDefaultUsers = [
        [
            "login" => "wallysonn",
            "name" => "walison gomes",
            "email" => "",
            "avatar_url" => "https://avatars.githubusercontent.com/u/7926071?v=4",
            "gravatar_id" => "",
            "url" => "https://api.github.com/users/wallysonn",
            "html_url" => "https://github.com/wallysonn",
            "followers_url" => "https://api.github.com/users/wallysonn/followers",
            "following_url" => "https://api.github.com/users/wallysonn/following{/other_user}",
            "gists_url" => "https://api.github.com/users/wallysonn/gists{/gist_id}",
            "starred_url" => "https://api.github.com/users/wallysonn/starred{/owner}{/repo}",
            "subscriptions_url" => "https://api.github.com/users/wallysonn/subscriptions",
            "organizations_url" => "https://api.github.com/users/wallysonn/orgs",
            "repos_url" => "https://api.github.com/users/wallysonn/repos",
            "events_url" => "https://api.github.com/users/wallysonn/events{/privacy}",
            "received_events_url" => "https://api.github.com/users/wallysonn/received_events",
            "type" => "User",
            "site_admin" => false,
            "company" => "",
            "blog" => "https://webdatasoft.com.br",
            "location" => "são luís, ma - brasil",
            "hireable" => null,
            "bio" => "desenvolvedor full stack com mais de 10 anos de experiência. apaixonado por vue, php, react e node. ",
            "twitter_username" => "",
            "public_repos" => 13,
            "public_gists" => 1,
            "followers" => 3,
            "following" => 6,
            "gh_id" => 7926071,
            "gh_created_at" => "2014-06-18 18:13:36",
            "gh_updated_at" => "2023-04-25 11:17:39",
        ],
        [
            "login" => "diego3g",
            "name" => "diego fernandes",
            "email" => "",
            "avatar_url" => "https://avatars.githubusercontent.com/u/2254731?v=4",
            "gravatar_id" => "",
            "url" => "https://api.github.com/users/diego3g",
            "html_url" => "https://github.com/diego3g",
            "followers_url" => "https://api.github.com/users/diego3g/followers",
            "following_url" => "https://api.github.com/users/diego3g/following{/other_user}",
            "gists_url" => "https://api.github.com/users/diego3g/gists{/gist_id}",
            "starred_url" => "https://api.github.com/users/diego3g/starred{/owner}{/repo}",
            "subscriptions_url" => "https://api.github.com/users/diego3g/subscriptions",
            "organizations_url" => "https://api.github.com/users/diego3g/orgs",
            "repos_url" => "https://api.github.com/users/diego3g/repos",
            "events_url" => "https://api.github.com/users/diego3g/events{/privacy}",
            "received_events_url" => "https://api.github.com/users/diego3g/received_events",
            "type" => "User",
            "site_admin" => false,
            "company" => "@rocketseat ",
            "blog" => "http://rocketseat.com.br",
            "location" => "brasil",
            "hireable" => null,
            "bio" => "cto at @rocketseat. passionate about education and changing people's lives through programming.",
            "twitter_username" => "dieegosf",
            "public_repos" => 63,
            "public_gists" => 161,
            "followers" => 27756,
            "following" => 83,
            "gh_id" => 2254731,
            "gh_created_at" => "2012-08-31 11:46:00",
            "gh_updated_at" => "2023-04-24 12:57:41",
        ],
        [
            "login" => "filipedeschamps",
            "name" => "filipe deschamps",
            "email" => "",
            "avatar_url" => "https://avatars.githubusercontent.com/u/4248081?v=4",
            "gravatar_id" => "",
            "url" => "https://api.github.com/users/filipedeschamps",
            "html_url" => "https://github.com/filipedeschamps",
            "followers_url" => "https://api.github.com/users/filipedeschamps/followers",
            "following_url" => "https://api.github.com/users/filipedeschamps/following{/other_user}",
            "gists_url" => "https://api.github.com/users/filipedeschamps/gists{/gist_id}",
            "starred_url" => "https://api.github.com/users/filipedeschamps/starred{/owner}{/repo}",
            "subscriptions_url" => "https://api.github.com/users/filipedeschamps/subscriptions",
            "organizations_url" => "https://api.github.com/users/filipedeschamps/orgs",
            "repos_url" => "https://api.github.com/users/filipedeschamps/repos",
            "events_url" => "https://api.github.com/users/filipedeschamps/events{/privacy}",
            "received_events_url" => "https://api.github.com/users/filipedeschamps/received_events",
            "type" => "User",
            "site_admin" => false,
            "company" => "",
            "blog" => "https://filipedeschamps.com.br/",
            "location" => "brasil",
            "hireable" => null,
            "bio" => "vou fazer você se apaixonar por programação!",
            "twitter_username" => "",
            "public_repos" => 18,
            "public_gists" => 0,
            "followers" => 28505,
            "following" => 446,
            "gh_id" => 4248081,
            "gh_created_at" => "2013-04-24 17:59:20",
            "gh_updated_at" => "2023-04-21 18:56:47",
        ],
        [
            "login" => "rmanguinho",
            "name" => "rodrigo manguinho",
            "email" => "",
            "avatar_url" => "https://avatars.githubusercontent.com/u/4589851?v=4",
            "gravatar_id" => "",
            "url" => "https://api.github.com/users/rmanguinho",
            "html_url" => "https://github.com/rmanguinho",
            "followers_url" => "https://api.github.com/users/rmanguinho/followers",
            "following_url" => "https://api.github.com/users/rmanguinho/following{/other_user}",
            "gists_url" => "https://api.github.com/users/rmanguinho/gists{/gist_id}",
            "starred_url" => "https://api.github.com/users/rmanguinho/starred{/owner}{/repo}",
            "subscriptions_url" => "https://api.github.com/users/rmanguinho/subscriptions",
            "organizations_url" => "https://api.github.com/users/rmanguinho/orgs",
            "repos_url" => "https://api.github.com/users/rmanguinho/repos",
            "events_url" => "https://api.github.com/users/rmanguinho/events{/privacy}",
            "received_events_url" => "https://api.github.com/users/rmanguinho/received_events",
            "type" => "User",
            "site_admin" => false,
            "company" => "lead software architect & online instructor",
            "blog" => "https://rmanguinho.github.io/",
            "location" => "rio de janeiro, brazil",
            "hireable" => true,
            "bio" => "",
            "twitter_username" => "r_manguinho",
            "public_repos" => 10,
            "public_gists" => 0,
            "followers" => 3598,
            "following" => 2,
            "gh_id" => 4589851,
            "gh_created_at" => "2013-06-01 22:10:16",
            "gh_updated_at" => "2023-04-15 11:19:46",
        ]
    ];

    public function run(): void
    {
        // truncate the table if it exists
        DB::table('gh_users')->truncate();
        foreach($this->ghDefaultUsers as $user){
            GhUser::create($user);
        }
    }
}
