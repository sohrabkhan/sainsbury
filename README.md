# Sainsbury's PHP Test #
A website scraper done in PHP that can scrap a URL from Sainsbury's platform and return products in a json format.

## Challenges ##
Before even starting to code I was faced with the main challenge of selecting what to choose. Because no framework 
requirements are given so I had all sorts of options available and it was difficult to choose the one that would show
my OOP skills.

#### > Symfony ####
I was very tempted to use Symfony3 because it's my strongest framework and it's got Components built-in that would do
the job like DomCrawler and Console components.
But since this is a chance for me to show off, I chose not to use any framework and complete the task in plain OOP PHP.

## How to ##
Clone the repo and then run:
```
composer install
```

To simply run the console application :
```
php run.php
```

If you want the application to scrape another similar URL:
```
php run.php http://hiring-tests.s3-website-eu-west-1.amazonaws.com/2015_Developer_Scrape/5_products.html
```

## Design Decisions ##
I have tried to show off as much of my object oriented skills as possible. Hence I've taken used all the four pillars 
of object oriented programming i.e. Abstraction, Encapsulation, Polymorphism and Inheritance.

I've used Polymorphism