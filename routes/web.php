<?php

use App\Livewire\Blog;
use App\Livewire\BlogList;
use App\Livewire\BlogSingle;
use App\Livewire\FrontAboutSection;
use App\Livewire\FrontFooter;
use App\Livewire\FrontHeader;
use App\Livewire\FrontPortfolioSection;
use App\Livewire\FrontProcessSection;
use App\Livewire\FrontServiceSection;
use App\Livewire\FrontSkillSection;
use App\Livewire\Home;
use App\Livewire\WidgetPagination;
use App\Livewire\WidgetSocmed;
use App\Livewire\WidgetWa;
use Illuminate\Support\Facades\Route;

// Route Utama
Route::get('/', Home::class);
Route::get('/Blog', Blog::class);
Route::get('/Blog-single', BlogSingle::class);

// Livewire Section
Route::get('/frontHeader', FrontHeader::class);
Route::get('/frontFooter', FrontFooter::class);
Route::get('/frontProcessSection', FrontProcessSection::class);
Route::get('/frontAboutSection', FrontAboutSection::class);
Route::get('/frontPortfolioSection', FrontPortfolioSection::class);
Route::get('/frontSkillSection', FrontSkillSection::class);
Route::get('/frontServiceSection', FrontServiceSection::class);
Route::get('/frontTestimonialSection', FrontServiceSection::class);
Route::get('/frontPartnerSection', FrontServiceSection::class);
Route::get('/frontBlogSection', FrontServiceSection::class);
Route::get('/frontContactSection', FrontServiceSection::class);

// Blog
Route::get('/BlogList', BlogList::class);

// Livwire Widget
Route::get('/WidgetSocmed', WidgetSocmed::class);
Route::get('/WidgePagination', WidgetPagination::class);
Route::get('/WidgetWa', WidgetWa::class);
