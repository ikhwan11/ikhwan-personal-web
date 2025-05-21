<?php

use App\Livewire\FrontAboutSection;
use App\Livewire\FrontFooter;
use App\Livewire\FrontHeader;
use App\Livewire\FrontPortfolioSection;
use App\Livewire\FrontProcessSection;
use App\Livewire\FrontServiceSection;
use App\Livewire\FrontSkillSection;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);

// sections
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
