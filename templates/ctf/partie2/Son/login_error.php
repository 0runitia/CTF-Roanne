
{% extends 'base.html.twig' %}

{% block stylesheets %}
		<link rel="stylesheet" media="screen" type="text/css" title="Exemple" href="/css/maintenance.css"/>
{% endblock %}

{% block body %}
<div class="container">

<h1><div Align=center style="padding:3px; border:5px double #3400f6; background-color:#ab30e0;"><span style="text-decoration: underline;"><i>Stéganographie 3</i></span></div></h1>   

<p> <font size="6">  <h1>C'est partie ! </h1>

Ce n'est pas la bonne reponse essayez encore.  <br> 
Decryptez ce fichier audio en le modifiant via audacity <br>
<li><a href="/Download/son.mp3"
		download="son.mp3">son.mp3</a></li>
<br> 
<li><a href="/Download/audacity.exe"
		download="audacity.exe">Telecharger audacity</a></li>
<br> 
</font> </p></p>

<br/>
<form action="authentification_son" method="post">
Votre reponse : <input type="text" name="son">
<br/>
<input type="submit" value="Envoyer">
<br/>

<Div Align=right>
<a href="#"  class=" btn btn-primary" style="text-shadow:2px 2px 4px #000000;"> Retour en haut ↑</a></div>
<div/>
<br/>
{% endblock %}