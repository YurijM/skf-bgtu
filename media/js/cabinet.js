var interval = 0;

function showPreloader() {
	$('#preloader').show();
}

function hidePreloader() {
	$('#preloader').hide();
}

function messageSend(idUser) {
	isGroup = ($("#addressee_group").css('display') == 'block');

	message = $('#message').val();
	if (message == '') {
		alert('Отсутствует текст сообщения');
		return;
	}

	idTo = (isGroup ? $('#addressee_group').val() : $('#addressee').val());

	if (idTo == 0) {
		alert('Неуказан адресат');
		return;
	}

	idFrom = idUser;

	showPreloader();

	id = $('#messageId').val();

	/*$.ajaxSetup({
		async: false
	});*/

	Message = {idFrom: idFrom, idTo: idTo, message: message, id: id};

	if (isGroup) {
		$.post('user/sendgroup', {Message: Message}, on_success);
	} else {
		$.post('user/sendmessage', {Message: Message}, on_success);
	}

	function on_success(data) {
		/*$('#messages').html(data);

		block = document.getElementById('messages');
		block.scrollTop = block.scrollHeight;*/

		loadMessages(-1);

		$("#addressee :first").prop("selected", true);
		$('#message').val('');

		$("#new").show();
		$("#edit").hide();
	};

	hidePreloader();
}

function loadMessages(range) {
	showPreloader();

	/*$.ajaxSetup({
		async: false
	});*/

	$.post('user/loadmessages', {range: range}, on_success);

	function on_success(data) {
		prev = $('#messages').text().trim();
		$('#check').html(data);

		if (prev != $('#check').text().trim()) {
			div = $('#messages');
			div.html(data);
			div.scrollTop(div.prop('scrollHeight'));
		}

		// Случайное число в диапазоне от 1 минуты до 3 минут
		var delay = getDelay(60000, 180000);

		// Если есть участники в online, то выбираем паузу в диапазоне от 30 секунд до минуты
		/*if ($('.online').html().trim() != '')
		{
			delay = getDelay(30000, 60000);
		}*/

		if (interval > 0)
			clearTimeout(interval);

		interval = window.setTimeout(function () {
			loadMessages(range);
		}, delay); // обновление страницы через выбранную случайным образом паузу

		//$('#message').focus();
	};

	hidePreloader();
}

function getDelay(min, max) {
	var range = max - min + 1;
	return Math.floor(Math.random() * range) + min;
}

function messageEdit(idMessage, idTo) {
	showPreloader();

	$('#message').html('');

	/*$.ajaxSetup({
		async: false
	});*/

	$.post('user/editmessage', {id: idMessage}, on_success);

	function on_success(data) {
		$("#to_student").click();
		$("#addressee option[value=" + idTo + "]").prop("selected", "selected");
		$('#message').val(data.replace(/<br>/g, ''));
		$('#messageId').val(idMessage);
		$("#message").focus();

		$("#new").hide();
		$("#edit").show();
	}

	hidePreloader();
}

function messageDelete() {
	message = $('#message').val();

	if (confirm('Вы действительно хотите удалить комментарий "' + message + '"')) {
		showPreloader();

		/*$.ajaxSetup({
			async: false
		});*/

		id = $('#messageId').val();

		$.post('user/deletemessage', {id: id}, on_success);

		hidePreloader();
	}

	function on_success(data) {
		$("#addressee :first").prop("selected", true);
		$('#message').val('');

		$("#new").show();
		$("#edit").hide();

		loadMessages(-1);
	}
}

function messageCancel() {
	showPreloader();

	$('#message').val('');
	$("#addressee :first").prop("selected", true);

	$("#new").show();
	$("#edit").hide();

	hidePreloader();
}

function loadLiteratureByFaculty(facultyId) {
  showPreloader();

  $.post('/cabinet/literature/loadliteraturebyfaculty', {id: facultyId}, on_success);

  function on_success(data) {
  	$('.literature > .list-literature').html(data);
  }

  hidePreloader();
}

function loadLiteratureBySubject(facultyId, subjectId) {
  showPreloader();

  $.post('/cabinet/literature/loadliteraturebysubject', {facultyId: facultyId, subjectId: subjectId}, on_success);

  function on_success(data) {
    $('.literature > .list-literature').html(data);
  }

  hidePreloader();
}

function addDoc() {
  $('.literature .add-doc').removeClass('hidden');
  $('.literature .btn-add-doc').addClass('disabled');
}

function loadSubjectsByFaculty() {
  showPreloader();

  var facultyId = $('.literature select[name="faculty"]').val();
  var el = document.getElementById('subjectId');
	var subjectId = el.dataset.subjectId;

  $.post('/cabinet/literature/loadsubjectsbyfaculty', {faculty_id: facultyId, subject_id: subjectId}, on_success);

  function on_success(data) {
    $('.literature select[name="subject"]').html(data);
    el.dataset.subjectId = "0";
  }

  hidePreloader();
}

function loadLessonsByGroup(group) {
	showPreloader();

	/*const group = $('.groups select[name="group"]').val();*/

	$.post('/cabinet/distance/loadlessonsbygroup', {group: group}, on_success);
	//$.get('/cabinet/distance/loadlessonsbygroup', {group: group}, on_success);

	function on_success(data) {
		$('.list-lessons').html(data);
	}

	hidePreloader();
}

function deleteDoc(id, facultyId, subjectId, title) {
	if (confirm('Вы действительно хотить удалить документ\n' + title)) {
    showPreloader();

    $.post('/cabinet/literature/deletedoc', {id: id}, on_success);

    function on_success(data) {
      loadLiteratureBySubject(facultyId, subjectId);
    }

    hidePreloader();
  }
}

function deleteLesson(id, group, theme) {
	if (confirm('Вы действительно хотить удалить занятие\n' + theme)) {
		showPreloader();

		$.post('/cabinet/distance/deletelesson', {id: id}, on_success);

		function on_success(data) {
			loadLessonsByGroup(group);
		}

		hidePreloader();
	}
}
