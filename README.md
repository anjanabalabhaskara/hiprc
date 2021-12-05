# http://cse.iitkgp.ac.in/resgrp/hiprc/
- **Our research group Website**
- `git clone https://github.com/SunandanAdhikary/hiprc.git` in your local to work on it on the very first time
- Update and copy the updated files/folders in the website sever 
- `git add .` and then `git commit -m "your coment"`  with _very specific comment with 1-liner description the chages that you made_ and `git push origin master` those changes here
- **Do not forget to `git pull`in your local directory everytime you work on it, otherwise changes made by others will be lost**
- If two people are working on the same file, merge carefully discussing the conflicts among yourselves
- [A nice git cheat sheet for you reference](https://rogerdudler.github.io/git-guide/)
- Below are the instructions to visualize the changes you made before finalizing creating a local server with  WAMP/XAMP/MAMP

#### 1. Install WAMP/XAMP/MAMP based on your OS i.e. Win/Linux/MAC
#### 2. Clone/pull this project insite www or htdocs folder of your  WAMP/XAMP/MAMP/LAMP installation directory
> whole website folder should be in www folder eg. *C:/wamp64/www/Hiprc_website/* and this will be your **website server root**.
#### 3. Start all services in WAMP/XAMPP/MAMP/LAMPP
> just run it, you can access it in your system tray (beside notifications/shutdown menu) in Win/Linux/MAC.
#### 4. Open your localhost on browser 
> just type [localhost](http://localhost/) in browser url placeholder. *Don't forget to add localhost to bypass proxy if you are behind a proxy network.*
#### 5. In your localhost page go to *add vhosts or add virtual hosts* option or in *httpd-vhosts.conf* file in apache folder(inside XAMP/LAMP) and add your project folder path with a *virtual Host Name Alias*. Apache serves the folder you want to access with mentioned alias name.
> **in WAMP** if *C:/wamp64/www/Hiprc_website/* is your project folder and you want to add as virtualhost and *hiprc* be alias(vhost name) you want to access it with then add them in corresponding spaces in add [virtualhosts page](http://localhost/add_vhost.php?lang=english) (add virtual host option will be at left down corner of your localhost page I guess). 
> **in LAMPP/XAMPP** it should be accessible with [localhost/your_project_folder_name]. If the stylesheet is not linked when you open your webpage then you need to add virtualhost alias manually i.e. **1)** in LAMPP/XAMPP inside `apache/conf/` folder (or `opt/lampp/etc/conf/` folder) edit the **httpd.conf** file and uncomment if there is anyline with `include /etc/extra/httpd-vhosts.conf`, **2)** inside `apache/extra/` folder (or `opt/lampp/etc/extra/` folder) edit the **httpd-vhosts.conf** file and uncomment the section starting with `NameVirtualHost*:80`. You will have to add both *localhost* and your *project vhost alias*. After adding it should look like 
```
<VirtualHost *:80> <<the port number you want to use>>
	ServerName hiprc <<servername alias like "localhost" you want to use to load the following directory>>
	DocumentRoot "f:/wamp64/www/hiprc_webpage_new" <<or in UBUNTU "opt/lampp/htdocs/hiprc_webpage_new">>
	<Directory  "f:/wamp64/www/hiprc_webpage_new/"> <<or in UBUNTU "opt/lampp/htdocs/hiprc_webpage_new">>
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require local
	</Directory>
</VirtualHost>
```
**Edit it there, don't copy n paste**.
With this you can access the website just typing [hiprc](http://hiprc/) in your browser, just like [localhost](http://localhost/).
##### PS: If you are still unable to open the project properly search on internet how to add virtual host [in ubuntu](https://ourcodeworld.com/articles/read/302/how-to-setup-a-virtual-host-locally-with-xampp-in-ubuntu)/ [in windows](https://john-dugan.com/wamp-vhost-setup/)/ [in MacOS](https://www.digitalmastersmag.com/magazine/setting-up-apache-virtual-hosts-on-mamp/) in corresponding server application (XAMPP/LAMPP/WAMP/MAMP).
#### 6. Restart all your services offered by WAMP/XAMPP/LAMPP/MAMP and done.


