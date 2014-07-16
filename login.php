<?php $block->open('section'); ?>
<?= $block->document->tag('h1', 'name', ['class' => ['login-header']]); ?>
<div class="login-wrapper">
		<div class="row">
			<div class="col-xs-12">
				<form name="loginform" action="<?= $block->document['url']; ?>" id="login-form" method="post">
					<input name="username" id="login-username" type="text" placeholder="Username" />
					<input name="password" id="login-password" type="password" placeholder="Password"/>
					<input type="submit" name="wp-submit" id="login-submit" value="Login" />
				</form>
			</div>
		</div>
	</div>
<?php $block->close();