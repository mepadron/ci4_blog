<!-- CONTENT -->

<section>

	<h1>About this page</h1>
	<h2>Hola mundo</h2>

	<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

	<p>If you would like to edit this page you will find it located at:</p>

	<pre><code>app/Views/welcome_message.php</code></pre>

	<p>The corresponding controller for this page can be found at:</p>

	<pre><code>app/Controllers/Home.php</code></pre>
	<p><?php echo "Hola como esta le saluda ". $nombre. " tu sueldo es de ",$sueldo?></p>
	<p><?= site_url();?></p>
	<p><?= base_url();?>/</p>

</section>
