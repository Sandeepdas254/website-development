# website-development
video.html:
This HTML file appears to be a webpage displaying a video related to KFC.
It sets the title of the webpage to "VIDEO".
The background color of the page is black (bgcolor="black").
It includes KFC logo (1.jpg) and another image (al.cms) centered at the top.
A <marquee> tag scrolls a brief description of KFC.
It embeds a video (VEDIO.mp4) with playback controls, centered on the page.
Another <marquee> tag scrolls another description of KFC's core product.
Contact details and feedback section are displayed, followed by links to navigate to other pages.
The closing tags for <html> and <body> are present, but there's an extra closing </body> tag at the end of the file, which seems unnecessary.


form.html:
This HTML file creates a form for users to input their details.
Users can input their name, mobile number, email address, physical address, and amount.
Upon form submission, the data is sent to the server-side script (2.php) using the POST method.
After the form, there's a horizontal line (<HR>) and links to navigate to the next and previous pages.


order.html:
This HTML file appears to display a menu of items available for ordering at KFC.
It sets the title of the webpage to "ORDER".
The background color is set to a dark shade.
It displays a table listing various menu items like Chicken Roll, Chicken Bucket, Wings, etc., with their respective images and prices.
Additionally, it embeds a Google Maps iframe to display the location of KFC.
There's extra closing HTML tags at the end, including </table>, </body>, and </html>, but the corresponding opening tags for these elements are missing.

2.php:
This PHP file seems to handle form submission from form.html but it's incomplete.
It includes a PHP script that attempts to retrieve form data using $_POST and insert it into a database (not provided in the snippet).
However, there's an issue with the variable name $idd, which is used instead of $id for storing the value of the 'id' field from the form.


Overall, these files collectively create a simple website structure for a KFC outlet, allowing users to view menus, place orders, watch videos, and provide feedback.
