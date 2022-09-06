# Level-4-Capstone-Project-I-PHP-and-SQL-Server

SPECIFICATIONS
You are to create a new dynamic website for a company called Cool Tech.

Cool Tech specialises in bringing digestible information about all things technology for popular consumption. Their current website has a very simple blogging theme, but they have grown so popular that they are in need of a new website with more features and the functionality to serve their growing needs.

Cool Tech has four main article categories:

● Tech news

● Software reviews

● Hardware reviews

● Opinion pieces

However, they are currently in the process of hiring more writers and expect this list to grow. Their current website has no way of distinguishing between categories, and they have requested that this be a feature of the new site.

Furthermore, articles are to be taggable with relevant terms, like “AI”, “Google”, “High-Performance Computing”, or “Singularity”. The purpose of tagging articles is improved SEO (Search Engine Optimisation) and allowing users to find articles easily on topics they are interested in.

The new website should have the following pages (more details are in the compulsory tasks below):

● Home page

● Article view page

● Category view page, where only articles of a certain category are listed.

● Tag view page, where only articles of a certain tag are listed.

● About Us page

● Legal page, including Terms of Use, and Privacy Policy

Task 1
● Design an appropriate database. It should store articles, their categories and their tags. Articles must be indexed by creation date, category, and tags so that they can quickly be listed by these features.

○ Note that an article has exactly 1 category, but can have any number (including 0) of tags.

○ After designing it, populate the database with sample data (articles, categories, and tags). At least 5 of each. This will be important for development.

○ Create and submit a simple ERD outlining your DB design.

● Create a Laravel project and link it up with the database.

● Create the home page. It should feature the latest 5 articles. Display the appropriate titles, and the first paragraph of each article. Be sure that where you display an article title, that title is a link to its appropriate article page.

Note: You do not need to write the actual articles. You can just use placeholder text.

● Create the article view page. Its URL should have the form /article/{id} and should display the appropriate article’s title, content, creation date, category, and tags.

● Create the category view page. Its URL should have the form /category/{slug} and should list all articles of a certain category.

○ The slug is a URL friendly version of the category name. E.g. the “Tech News” category’s slug could be tech-news. It’s like a human-readable version of an id.

○ If the requested slug does not exist, handle the issue gracefully.

● Create the tag view page. It should behave the same as the category view page, but sort by tag, not category.

○ Everywhere a tag is displayed (i.e. the article view page), it should be a link to the appropriate tag view page.

● Create the legal page. It must contain generic website Terms of Use and Privacy Policy content.

Here and here are some examples. You need not create fully-fledged legalese documents. A few simple paragraphs should do the trick.

Task 2
Extend the website to have the following functionality.

● Create a search page. It should have 3 search bars — one for article ID, category, and tag, respectively. Clicking on the appropriate search button should redirect the user to the correct article, category, or tag page.

● Create a cookie notice that is displayed on every page of the website. Hint: read about reusable components in Laravel.

● Create a footer that is displayed on all web pages. It should contain links to the search page and legal page. It should also display a copyright notice with the current year.
