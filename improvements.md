# UI/UX

Better user interface with navigation bar.
Function flow and interactions need to be review.
Should be in one age load, instead of redirect
Responsive

# CD/CI

Auto deploy is a must (missing composer install/update, creating testing data) - limited by the developer's experience.
Need the following phpunit testing:
    check out amount
    webpage check
QA process need to be implemented through git.


# Design and future enhancement

Controllers need to be RESTful driven
Error handling, access loging, function performance logging need to be developed
Introduce user interface testing
Google analytic tracking
Checkout reconciliation system for finance
Web socket can be introduced for real time transaction
Better to separate database and application for performance tuning and scalability (adapt a full laravel deployment solution with web, app, db, cache)
State manager (session controller) can be introduced if site is busy.
Running in to a dependency issue, need to resolve it from docker
