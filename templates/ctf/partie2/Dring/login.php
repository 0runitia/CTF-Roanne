
{% extends 'base.html.twig' %}

{% block stylesheets %}
		<link rel="stylesheet" media="screen" type="text/css" title="Exemple" href="/css/maintenance.css"/>
{% endblock %}

{% block body %}
<div class="container">

<h1><div Align=center style="padding:3px; border:5px double #3400f6; background-color:#ab30e0;"><span style="text-decoration: underline;"><i>Cryptographie 2</i></span></div></h1>   
<br/>
<Div Align=center> <img src= "/mobile.png"  width="20%" title="mobile"/> </Div>
<br/>
<p> <font size="6">  <h1>C'est partie ! </h1>

Pour ce challenge vous allez devoir decoder un message caché  <br> 
Il existe different type de clavier, pour ecrire un message  <br>
Retrouvez le message caché dans cette suite de chiffres :<br>
333-555-2-4-7-44-666-66-3
<br> 
</font> </p></p>

<br/>
<form action="authentification_dring" method="post">
Votre reponse (en minuscule) : <input type="text" name="phone">
<br/>
<input type="submit" value="Envoyer">
<br/>


<Div Align=right>
<a href="#"  class=" btn btn-primary" style="text-shadow:2px 2px 4px #000000;"> Retour en haut ↑</a></div>
<div/>
<br/>
{% endblock %}