<?php
$this->pageTitle=Yii::t('wot', 'Admin Panel').' - '.Yii::t('wot', 'FAQ по оплате');
?>

<h2><a href="/admin"><?php echo Yii::t('wot', 'Admin Panel')?></a> <span class="rarr"></span> <?php echo Yii::t('wot', 'FAQ по оплате')?></h2>

<div class="content-inner-page">
	
	<div class="content-column">
		
		<div class="filling">

			<h3>Что такое баланс сайта?</h3>
			<p>
				Баланс сайта - это текущий остаток средств на вашем сайте. Эти средства используются для активации платных модулей, а также для оплаты аренды TeamSpeak сервера.
			</p>
			<h3>Как пополнить баланс?</h3>
			<p>
				Укажите сумму платежа (не менее 10 рублей) и нажмите "Пополнить". Вы будете перенаправлены на сайт платежной системы <a href="http://unitpay.ru/">unitpay.ru</a>. Выберите удобный способ оплаты и следуйте инструкциям.
				После оплаты платежная система вернет вас на сайт wot.pw. Комиссия при оплате НЕ ВЗЫМАЕТСЯ (за исключением оплаты через SMS). Пополнить баланс сайта также может любой участник вашего клана или альянса через специальный виджет {DONATE}.
			</p>
			<h3>Можно ли пополнить баланс другим способом?</h3>
			<p>
				Можно. Если вы не нашли желаемого способа в платежной системе, пишите в скайп brdsoft.
			</p>
			<h3>Как вернуть деньги?</h3>
			<p>
				Вы можете вернуть деньги в течение 2-х недель с даты оплаты. Активированные услуги на сумму возвращаемых средств будут отключены. При возвращении денег за подключенный домен взымается комиссия 110 рублей.
				Для возврата денег обращайтесь в скайп brdsoft.
			</p>
			<h3>Я пополнил баланс сайта, но на сайте баланс не увеличился. Что делать?</h3>
			<p>
				Пишите в скайп brdsoft.
			</p>
			<h3>Я активировал услугу, когда она появится на сайте?</h3>
			<p>
				Услуга активируется моментально. Если этого не произошло пишите в скайп brdsoft. Собственный домен активируется в соответствии с <a href="http://wot.pw/rshop/domain" target="_blank">регламентом</a>
			</p>
			<h3>Я активировал услугу, но она мне не понравилась. Что делать?</h3>
			<p>
				Вы можете отказаться от активированной услуги в течение 2-х недель с момента ативации. Пишите в скайп brdsoft. Мы вернем средства на баланс сайта.
			</p>
			
		</div>
	</div>
	
	<div class="aside-column">
		<?php $this->renderPartial('//layouts/adminSidebar'); ?>
	</div>

</div>