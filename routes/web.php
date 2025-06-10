<?php

use App\Livewire\BackAboutForm;
use App\Livewire\BackAdminSidebar;
use App\Livewire\BackBlogForm;
use App\Livewire\BackCurriculumForm;
use App\Livewire\BackPortfolioForm;
use App\Livewire\BackUserForm;
use App\Livewire\BackUserList;
use App\Livewire\BackLoginForm;
use App\Livewire\BackServiceForm;
use App\Livewire\Blog;
use App\Livewire\BlogList;
use App\Livewire\BlogSingle;
use App\Livewire\FrontAboutSection;
use App\Livewire\FrontFooter;
use App\Livewire\FrontHeader;
use App\Livewire\FrontPortfolioSection;
use App\Livewire\FrontProcessSection;
use App\Livewire\FrontProductSection;
use App\Livewire\FrontServiceSection;
use App\Livewire\FrontSkillSection;
use App\Livewire\Home;
use App\Livewire\InputMultipleImage;
use App\Livewire\TitleBlogInput;
use App\Livewire\WidgetPagination;
use App\Livewire\WidgetSocmed;
use App\Livewire\WidgetWa;
use Illuminate\Support\Facades\Route;

// Route Utama
Route::get('/', Home::class);
Route::get('/Blog', Blog::class);
Route::get('/Blog-single', BlogSingle::class);
// Admin Route
Route::get('/Admin-login', BackLoginForm::class);
Route::get('/Admin-blog-form', BackBlogForm::class);
Route::get('/Admin-about-form', BackAboutForm::class);
Route::get('/Admin-service-form', BackServiceForm::class);
Route::get('/Admin-curriculum-form', BackCurriculumForm::class);
Route::get('/Admin-portfolio-form', BackPortfolioForm::class);

// Admin Route  // ---- user
Route::get('/admin/user/list', BackUserList::class);
Route::get('/admin/user/create', BackUserForm::class)->name('user.create');
Route::get('/admin/user/{user:slug}/edit', BackUserForm::class)->name('user.edit');


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
Route::get('/frontProductSection', FrontProductSection::class);
// Admin Section
Route::get('/BackAdminSidebar', BackAdminSidebar::class);

// Blog
Route::get('/BlogList', BlogList::class);
Route::get('/TitleBlogInput', TitleBlogInput::class);
Route::get('/InputMultipleImage', InputMultipleImage::class);

// cv

// Livwire Widget
Route::get('/WidgetSocmed', WidgetSocmed::class);
Route::get('/WidgePagination', WidgetPagination::class);
Route::get('/WidgetWa', WidgetWa::class);
