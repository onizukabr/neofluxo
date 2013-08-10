// JavaScript Document

$(function(){
	$('#cont').hide();
	var textos;	
	var hash = window.location.hash;
	if (hash !='')
	{
		textos = $(hash).html();
		$('.abas li a[href="' + hash + '"]').parent().addClass('ativo');		
	} else {
		textos = $('#cont div:first-child').html();			
		$('.abas li:first-child').addClass('ativo');		
	}
	$('#textos').append('<div>' + textos + '</div>').find('div').slideDown();
	$('.abas li a').click(function(){
		$('.abas li').removeClass('ativo');
		$(this).parent().addClass('ativo');
		var ancora = $(this).attr('href');
		var nome = ancora.substr(1, ancora.length);
		textos = $('#cont div[id="' + nome + '"]').html();
		$('#textos').empty();
		$('#textos').append('<div>' + textos + '</div>').find('div').slideDown();
	return false();
	})
})