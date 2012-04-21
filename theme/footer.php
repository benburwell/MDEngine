<?php

$mdurl = (substr($_SERVER['REQUEST_URI'], -1, 1) == '/')? 'home/markdown' : $_SERVER['REQUEST_URI'].'/markdown'; ?>
		</article>
		<footer>
			Copyright &copy; <?php echo date('Y'); ?> &bull; <a href="<?php echo $mdurl; ?>">View Markdown</a><br />
			Powered by <a href="http://benburwell.com/lab/markdown.php">MdEngine</a>
		</footer>
	</body>
</html>