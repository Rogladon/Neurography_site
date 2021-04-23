<script src='includes/js-utilits/add-button-primary-menu.js'></script>
<?php if(!empty($_SESSION["user_id"])): ?>
	<script type="text/javascript">ElementsNotLogged()</script>
<?php else: ?>
	<script type="text/javascript">ElementsLogged()</script>
<?php endif; ?>