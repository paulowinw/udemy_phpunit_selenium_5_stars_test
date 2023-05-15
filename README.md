# RANKING STARS EXERCISE

The task for you is to build a class using TDD (you write test first and then the code that makes this test pass). The class should produce html which should show rating star on a website. The class should take integer parameter from 1 do 5. Throw exception if any other value. Use the following building html blocks: star for good rating `<i class="material-icons md-18">star</i>` , star for bad rating `<i class="material-icons md-18">star_border</i>` . Do not import any css, we do not need to see real stars on a web browser. You are interested only in producing correct html with the given building blocks (see source of the page).

Do not think much. Start writing a test as soon as possible, it does not have be final solution. It can be some prototyping or simulation first. For example '11111' represents 5 stars, '11110' 4 stars, '10000' 1 star, etc.  Then you can assert that such string is equal to the result of the class method you have to write, then you write the code that satisfies the test, then you replace prototyping with real stuff, do refactoring, etc. Try to make as little code duplication as possible.

Questions for this assignment
Why it is useful to code using TDD?