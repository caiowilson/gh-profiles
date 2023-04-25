<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gh_users', function (Blueprint $table) {
            $table->id();
            $table->id('gh_id');
            $table->string('login');
            $table->string('name');
            $table->string('email');
            $table->string('avatar_url');
            $table->string('gravatar_id');
            $table->string('url');
            $table->string('html_url');
            $table->string('followers_url');
            $table->string('following_url');
            $table->string('gists_url');
            $table->string('starred_url');
            $table->string('subscriptions_url');
            $table->string('organizations_url');
            $table->string('repos_url');
            $table->string('events_url');
            $table->string('received_events_url');
            $table->string('type');
            $table->boolean('site_admin');
            $table->string('company')->nullable();
            $table->string('blog')->nullable();
            $table->string('location')->nullable();
            $table->boolean('hireable')->nullable();
            $table->string('bio')->nullable();
            $table->string('twitter_username')->nullable();
            $table->integer('public_repos');
            $table->integer('public_gists');
            $table->integer('followers');
            $table->integer('following');
            $table->timestamp('gh_created_at');
            $table->timestamp('gh_updated_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gh_users');
    }
};
