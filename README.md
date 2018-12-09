# **Jaxx Revolutions**

The official website of Jaxx Liberty, the leading Multi-Platform Cryptocurrent Wallet created by Anthony Di Iorio, Co-founder of Ethereum and founder and CEO of Decentral and Jaxx.

For more information see [jaxx.io](https://jaxx.io) and [decentral.ca](https://decentral.ca).

## **Layout and Frameworks**

The site uses Bootstrap 4.1. Layout uses native Bootstrap classes, flexbox, and functional css.

## **PHP**

PHP is used minimally for header and footer includes.

## **CSS**

1. Functional [Atomic] css: the site employs the atomic css approach where small, single purpose classes are used based on visual function. Classes are referenced once in the CSS then used repeatedly in the HTML so as to avoid class repetition in the stylesheet.

*Note: the HTML can get heavy with classes specifically when it comes to spacing (padding and margin styles). Effort has been made to keep styles functional as much as possible, with added stylesheet classes only when necessary.*

2. One stylesheet is used with an effort at organizing structure vertically based on relationship to HTML and page order. Starts with resets and global elements, proceeding to more specific styles.

3. Animate.css is used minimally, mainly for the homepage testimonials carousel animations.

4. Naming conventions: 

    - titles and headings: `site-title`, `page-title`, `section-title`, `section-sub-title`
    - fonts: `Helvetica Neue` is the primary theme font.
    - background images: `bg--...`
    - background colors: `bg-...`
    - logos and icons: `jaxx-logo` and `jaxx-icon`

5. Height units
    - initially `vh` was used throughout for base layout heights, ranging from .min-100 to .min-70 and .min-50 classes. Google Chrome (as of Sept 18, 2018) has a 'bug' (they claim it's intentional) with vh units on mobile where the browser repaints vh elements causing janky scroll behaviour.
    - an alternative in Jaxx Liberty version 2.0 is using fixed heights but with the min-height css selector. Base heights are now `.min-700`, with an `-lg` class added to make 700px ~ 500px @media (max-width: 768px), `.min-500`, `.min-400`, and `min-300`, the latter primarily for images. This solves the jank issue and offers good scroll UX.

## **JS**

**Multiple JS plugins are used on the site.**

1. Smoothstate.js: an ajax plugin that hijacks http requests, swapping page content out without page refresh. Significantly improves view change speed and performance in addition to allowing for entrance and exit animations.

2. AOS: animate on scroll. A simple css based animation library that activates a variety of css animations on scroll.

 ## **Google Analytics**
    
1. GA gtag script is added in footer for general analytics, traffic, page views, bounce rate, etc.

2. Onclick events have been added to all <a> and nav links going to the jaxx.io Downloads and Support pages, as well as all footer links to social channels. Tags are organized by category (destination and/or item i.e. Downloads page or Android), and given a label (location on page i.e. menu, section, footer) for analysis: <onclick="googleAnalyticsTrigger('Downloads_Page', 'Footer')">

## **.htaccess**

1. Multiple .htaccess rewrites are employed to redirect previous site .html extensions to .php, and then to remove .php for pretty urls.