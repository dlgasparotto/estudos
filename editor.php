
<!DOCTYPE html>
<html>
<head>
	<title>----- Admin Padrao UNI.VS -----</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<script src="../libs/jquery-1.8.2.js"></script>
	<style>
		.editor{padding: 1rem; width: 50%; height: 200px; border: 1px solid black; font-family: Georgia, 'Times New Roman', Times, serif}
		.bts-editor i{text-align: center; line-height: 1.2rem; vertical-align: middle; font-size: .6rem; width: 1.2rem; height: 1.2rem; border: 1px solid #d4d4d4; border-radius: 2px}
	</style>
	<script>
		
		function bold(){ document.execCommand('bold')		}
		function copy(){ document.execCommand('copy')		}
		function link(){ document.execCommand('createLink','','www.unimed')		}
		function fontenome(){ document.execCommand('fontName','','Arial')		}
		function fontesize(){ document.execCommand('fontSize','',7)		}
		function fontecolor(){ document.execCommand('foreColor','','#dd0000')		}
		function fundocolor(){ document.execCommand('hiliteColor','','#dd0000')		}
		function listaord(){ document.execCommand('insertOrderedList') }
		function listanaoord(){ document.execCommand('insertUnorderedList') }
		function italico(){ document.execCommand('italic') }
		function center(){ document.execCommand('justifyCenter') }
		function just(){ document.execCommand('justifyFull') }
		function left(){ document.execCommand('justifyLeft') }
		function right(){ document.execCommand('justifyRight') }
		function limpar(){ document.execCommand('removeFormat') }
		function sub(){ document.execCommand('subscript') }
		function sup(){ document.execCommand('superscript') }
		function sublinhado(){ document.execCommand('underline') }
		function undo(){ document.execCommand('undo') }
		function redo(){ document.execCommand('redo') }
		function unlink(){ document.execCommand('unlink') }

		botoes = `<div style="padding: 5px" class="bts-editor">
		<i onClick="bold()"  class="fas fa-bold"></i> 
		<i class="fas fa-italic"></i> 
		<i class="fas fa-copy"></i> 
		<a href="javascript:bold()">bold</a> 
		<a href="javascript:copy()">copy</a>
		<a href="javascript:link()">link</a>
		<a href="javascript:fontenome()">fonte nome</a>
		<a href="javascript:fontesize()">fonte size</a>
		<a href="javascript:fontecolor()">fonte color</a>
		<a href="javascript:fundocolor()">cor fundo</a>
		<a href="javascript:listaord()">lista</a>
		<a href="javascript:listanaoord()">lista nao</a>
		<a href="javascript:italico()">italico</a>
		<a href="javascript:center()">center</a>
		<a href="javascript:just()">just</a>
		<a href="javascript:left()">left</a>
		<a href="javascript:right()">right</a>
		<a href="javascript:limpar()">limpar</a>
		<a href="javascript:sub()">sub</a>
		<a href="javascript:sup()">sup</a>
		<a href="javascript:sublinhado()">sublinha</a>
		<a href="javascript:undo()">undo</a>
		<a href="javascript:redo()">redo</a>
		<a href="javascript:unlink()">unlink</a></div>`;

		$(document).ready(function(){

			$('.campoeditor').each(function(){
				$(this).hide();
				$('<div contenteditable="true" class="editor" id="editor_'+$(this).attr('id')+'"></div>').insertAfter(this);
				$(botoes).insertAfter(this);
				campo = this;
				novoBox = document.getElementById('editor_'+$(this).attr('id'));
				$(novoBox).html( $(campo).val() );
				novoBox.addEventListener("input", function() {
					$(campo).val( $('#editor_'+$(campo).attr('id')).html() )
				});
			})


			ics = document.querySelectorAll('.bts-editor i')
			Array.from(ics).forEach(function(el){
				//$(el).mousedown(function(e){e.preventDefault()}) // assim funciona com jquery
				el.addEventListener("mousedown", e => e.preventDefault())
				})

			
		})

	
	</script>
<body>



<br><br><br>
<form action="" method="post">
<textarea name="texto" id="texto" cols="30" rows="10" class="campoeditor"><?= $_POST["texto"] ?></textarea>

<button>manda</button>
</form>
</body>
</html>