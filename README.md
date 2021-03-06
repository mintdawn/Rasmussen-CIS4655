# Rasmussen-CIS4655 Class Project

# Installation Instructions

# Usage

# Credits

Author: Dawn Summerall

# License

MIT License

Copyright (c) [2018] [Dawn Summerall]

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

# Timeline of Changes

This project was created for the Rasmussen class Advanced Mobile Web Application Development.

11/17/2018

The module 1 assignment asked that we create several wireframes using Bootstrap components. Module 2 asked that we bring the wireframes to life. I created three pages for this assignment. Each has a different layout using Bootstrap components. One page uses a carousel, another uses a jumbotron and multiple columns of text and the final one uses columns and cards to display content. I used a rounded-circle logo on the third navbar. I saw it on a Bootstrap tutorial the other day and thought I'd try that out also.

11/22/2018

Module 3 Activity assignment added. This assignment was to create a responsive page based on an illustration provided in class. The page had to have the correct column layout and look decent at any screen size and in any orientation. We were required to use Bootstrap to do this. I have a decent understanding of Bootstrap but, this exercise took that understanding to a deeper level. I am starting to really understand how to use d-block and d-none classes at different break points. The hardest part was getting the row in the center that contains two 6 width columns with nesting columns inside of them to display correctly on iPad. I wanted it to breakdown to just one image and one text block per row, instead of two, on the iPad and then down to everything stacked horizontally when viewed on a smaller device.  I was able to get it to do this in the end.

11/23/2018

Module 3 Course Project assignment added. Using the basic template you created in the Module 02 course project, select ONE navigation bar style, and add it to the home page. Create associated pages that are linked in the navigation, so that when the user clicks on a menu item, the site navigates to a new page. I changed the look of the site and made the theme of the site uniform instead of 3 different layouts. Every page has a header and navigation. I'm still working with various Bootstrap components to learn more about using them. The page displays responsively on several different kinds of devices. I had trouble getting space between the <divs> on the booklist.php page. Every time I would add a little padding between these sections it would cause them to wrap down to the next line. I ended up just putting padding on the bottom of them so they would at least look okay on smaller devices.

 11/28/2018

Using your own creativity, translate the sketch used in the Module 3 Activity into a wireframe that uses the following style and layout components to the home page or other linked pages:

* At least 3 buttons that have badges. They can be any size you choose, as well as any style.
  * Each of the red buttons inside the fact cards has a little counter badge. When the page retrieves data from the [Cat Facts API](https://github.com/alexwohlbruck/cat-facts) it goes through a loop and each time it goes through the loop it counts it and prints it in the card so each fact is numbered in the order it was retrieved.
* At least 2 labels.
  * There are two labels beneath the navbar
* At least 1 jumbotron.
  * There's a jumbotron at the top with a picture in it.
* At least 1 card. The button on the card must link to another page of content.
  * There are a ton of cards that are each holding a piece of data from the Cat Facts API.

The transparent black block of text in the jumbotron could use some work. I'd like it to float to the left when viewed from a large device and then become centered with smaller text on smaller device. That might be a lesson for another day though.

11/30/2018

I completed and committed the Module 4 Course Project files. I made a ton of mistakes again with this project. I keep misunderstanding the assignments but, hopefully the finished work is okay. For this project, I was supposed to create a new page based on a wireframe I should have done in the activity but, I made a whole new page there as well instead of a wireframe. Oh well, practice makes perfect. This page should have the same Bootstrap component requirements as the Mod 4 Activity. It does have these but it is slightly different. I found a more responsive way to layout the cards thanks to this [tutorial project](https://codepen.io/smashtheshell/pen/qRRdvb). I am sorry about the mix up. These challenges are so fun I am getting ahead of myself.

12/7/2018

The assignment for Module 5 was:

Create one new page in your site that contains a form. Your form must use the Bootstrap framework and styling. Your form must have:

* At least 2 text boxes
* At least 1 text area
* At least 1 set of check boxes
* At least 1 set of radios
* At least one dropdown with 3 options
* A submit button

The form must have form validation to disallow submission when the submit button is clicked.
The form does not require an action, since form processors were not covered in this course.

I did all of these things and used a small bit of JavaScript for part of the form validation. I may put functionality into the form later but for now it is just a study in how Bootstrap form validation works to make sure the form contains the required information before it is submitted.

12/14/2018

The assignment for Module 6 was:

Using the Notifications API, add at least one type of notification to one page of your application.

Your notification must:

* Appear for at least 10 seconds.
* Require the end user’s permission.
* Must close when the user clicks.

This took much longer than it should have. I had a lot of trouble figuring out exactly where the script should go. If I placed it anywhere except at the very bottom before the BODY tag, the code would not work. I also received error messages when I used a mix of http and https in the code. Chrome wanted the https url prefix. Once I got past these hurdles, things went better. I was able to create a notification based on the Professor's Toastr script. Toastr was really nice. It matches Bootstrap. I wish it had a cheat sheet for everything it does. I should have gone in and read all the classes but, this is being done over the last two days of class and my time is short. I was unsure about how to make the Toast go to another website when the notification was clicked on but, that isn't even in the assignment. I did get the second regular notification to do this at one point. I took the navigation out when I reread the specifics for the project however, I think I could use something similar to get a Toast notification to do the same thing. I thought this would be a fun project. It was a little frustrating at first and THEN it turned into a fun project. I will have to play with this some more.
