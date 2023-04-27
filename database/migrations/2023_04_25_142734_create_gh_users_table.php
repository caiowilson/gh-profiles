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
            $table->unsignedBigInteger('gh_id');
            $table->string('login');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('avatar_url')->nullable();
            $table->string('gravatar_id')->nullable();
            $table->string('url')->nullable();
            $table->string('html_url')->nullable();
            $table->string('followers_url')->nullable();
            $table->string('following_url')->nullable();
            $table->string('gists_url')->nullable();
            $table->string('starred_url')->nullable();
            $table->string('subscriptions_url')->nullable();
            $table->string('organizations_url')->nullable();
            $table->string('repos_url')->nullable();
            $table->string('events_url')->nullable();
            $table->string('received_events_url')->nullable();
            $table->string('type')->nullable();
            $table->boolean('site_admin')->nullable();
            $table->string('company')->nullable();
            $table->string('blog')->nullable();
            $table->string('location')->nullable();
            $table->boolean('hireable')->nullable();
            $table->string('bio')->nullable();
            $table->string('twitter_username')->nullable();
            $table->integer('public_repos')->nullable();
            $table->integer('public_gists')->nullable();
            $table->integer('followers')->nullable();
            $table->integer('following')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
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
