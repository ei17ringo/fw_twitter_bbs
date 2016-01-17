<div id="content">
		<div style="text-align: right"><a href="#">ログアウト</a></div>
		<form action="create" method="post">
			<dl>
				<dt>◯◯さん、メッセージをどうぞ</dt>
				<dd>
				<textarea name="message" cols="50" rows="5"></textarea>
				<input type="hidden" name="reply_post_id" />
				</dd>
			</dl>
			<div>
			<p>
				<input type="submit" value="投稿する" />
			</p>
			</div>
		</form>

		<?php 
		$user_posts = $this->view_options['user_posts'];
		foreach ($user_posts as $row) {
			echo $row['name'];
			echo $row['message'];
			echo '<br />';
		}
		?>
		<div class="msg">

			<img src="/fw_twitter_bbs/webroot/member_picture/dummy.png" width="48" height="48" alt="dummy" />

			<p><?php echo $this->view_options['message']; ?><span class="name">（<?php echo $this->view_options['nickname']; ?>）</span>[<a href="index.html?res=1">Re</a>]</p>
			<p class="day">
				<a href="view.html?id=2">2015-10-10 12:00:00</a>
				<a href="view.html">返信元のメッセージ</a>
				[<a href="#" style="color: #F33;">削除</a>]
			</p>


		</div>

		<div class="msg">

			<img src="/fw_twitter_bbs/webroot/member_picture/dummy.png" width="48" height="48" alt="dummy" />

			<p>押忍！<span class="name">（しんや）</span>[<a href="index.html?res=1">Re</a>]</p>
			<p class="day">
				<a href="view.html?id=2">2015-10-10 12:00:00</a>
				[<a href="#" style="color: #F33;">削除</a>]
			</p>


		</div>

		<ul class="paging">
			<li><a href="#">前のページへ</a></li>
			<li><a href="#">次のページへ</a></li>
		</ul>
	</div>
<?php 
	echo $this->view_options['message'];
?>