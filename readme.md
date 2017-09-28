<h1>LPDW_Jazz Project</h1>

This website is an update of the Tsf Jazz Website, a french jazz radio. We are a group of students and we do this for a school project of
our Professionnal License in Web Development.

<h5>There is no commercial purpose on this project or anything that we can exploit ro take out of Tsf Jazz Radio business.</h5>

To run the website, it's pretty easy. Just open the TSF_JAZZ folder in your terminal and run this command :
docker-compose up -d

To access to the website, url is : localhost:8080/server.php/
To acces to the phpmyadmin interface, url is : localhost:8181

If you want to save some lines in tables of the database, you must run this command before killing containers :
'Manu's command'

<h3>List of routes :</h3>

- ('/') Index -> Homepage // view called == welcome
- ('program') Program -> Show program page // view called == program
- ('jazzenda') Jazzenda -> Live concert program page // view called == jazzenda
- ('podcast') Podcast -> Podcast page // view called == podcast
- ('jazzblog') Jazz Blog -> Blogs arround jazz world // view called == jazzblog
- ('audtre') Auditors Treasure -> Form for auditors which allow users to send songs // view called == audtre
- ('trackhist') Tracks History -> Historic of all the tracks that passed // view called == trackhist
- ('media') Media -> Some videos // view called == media
- ('about') About -> Historic of the radio // view called == about
- ('contact') Write us -> Form for users which allows them to send us letters // view called == contact
