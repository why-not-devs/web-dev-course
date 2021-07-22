# Web development course
<hr>

## About

Everyone needs an entrypoint. The development of applications either mobile or software
is difficult to grasp in the start. We use many applications daily without been aware most
the time. Not everything can be reduced to an algorithm but there is a way in resolve certain
(if not most) of problems with the use of a computer.

This course aspire to be a reference useful to either those starting in development
(by hobby or professional career motivation) and those who are developers but need or want a centralized
reference to refresh certain concepts.

This course is in current progress and once finished we will make available all this information in a public website.
In the meantime will grow here.

## Structure

The sessions topics are defined in the yml files. In the folder php-cli are all sessions including a <code>Dockerfile</code> for console purposes. In the future we will add a <code>www</code> folder for a website study project. 

## Local environment

In order to execute this code you will need Docker Engine and Docker Compose installed in your computer.
These are rather available for all O.S. (Windows, Linux, Macintosh). To see install instructions of these, please follow the links:

<ul>
    <li><a href="https://docs.docker.com/engine/install/">Docker Engine</a></li>
    <li><a href="https://docs.docker.com/compose/install/">Docker Compose</a></li>
</ul>

After you have those installed you can proceed to clone this repository and then execute the following commands:
<ol>
    <li><code>cd localpath/web-dev-course/php-cli</code></li>
    <li><code>docker build -t {image_name} .</code></li>
    <li><code>docker run -it --rm --name {container_name} {image_name}</code></li>
</ol>
The <code>{image_name}</code> and <code>{container_name}</code> are variables which can be replaced with any text you want.
By default the <em>index.php</em> includes the <em>classOne.php</em> file but, in time, there are more sessions you need to update this include to:

<code>include ('{classNumberFile}');</code>

## Contact

For suggestions and collaborations please write us to <a href="mailto:whynot.dev@protonmail.com">whynot.dev@protonmail.com</a>
