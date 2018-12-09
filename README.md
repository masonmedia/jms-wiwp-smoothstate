# **Workshops in Wild Places**

The official website of Workshops in Wild Places, an international art teaching initiative developed by Canadian artist and educator Janice Mason Steeves. Travel to remote locations throughout the world to connect with the beauty and power of the wild landscape.

For more information see [workshopsinwildplaces.com](https://workshopsinwildplaces.com) and [janicemasonsteeves.com](https://janicemasonsteeves.com).

## **Layout and Frameworks**

The site uses Bootstrap 4.1, flexbox, and functional css.

## **PHP**

PHP is used for header and footer includes.

## **CSS**

1. Functional [Atomic] css: the site employs the atomic css approach where small, single purpose classes are used based on visual function. Classes are referenced once in the CSS then used repeatedly in the HTML for DRY code.

4. Naming conventions: 

    - titles and headings: `site-title`, `page-title`, `section-title`, `section-sub-title`
    - fonts: `Raleway` is the primary theme font.
    - background images: `bg-img...`
    - background colors: `bg-...`

## **JS**

**Multiple JS plugins are used on the site.**

1. Smoothstate.js: an ajax plugin that hijacks http requests, swapping page content out without page refresh. Significantly improves view change speed and performance in addition to allowing for entrance and exit animations.

2. AOS ("animate on scroll"). A simple css/js based animation library that activates a variety of css animations on scroll.


## **.htaccess**

1. An .htaccess rewrite is employed to remove .php for pretty urls.