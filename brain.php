<?php

//The BRAIN

    
    	$tng = $_GET['t'];
		$notes = array();
		$title = '';
		switch($tng){
			case 'a-maj':
				$notes = array(
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/0-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-e.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/1-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-a.mp3'),
					array('C#', 'https://s3.amazonaws.com/tuning-website/notes/1-csharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-csharp.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/1-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-e.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/2-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-a.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/2-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-e.mp3')
				);
				$title = 'Open A Major';
				$desc = '';
				break;
			case 'b-maj':
				$notes = array(
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/0-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-b.mp3'),
					array('F#', 'https://s3.amazonaws.com/tuning-website/notes/0-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-fsharp.mp3'),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/1-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-b.mp3'),
					array('F#', 'https://s3.amazonaws.com/tuning-website/notes/1-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-fsharp.mp3'),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-b.mp3'),
					array('D#', 'https://s3.amazonaws.com/tuning-website/notes/2-dsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-dsharp.mp3')
				);
				$title = 'Open B Major';
				$desc = '';
				break;
			case 'c-maj':
				$notes = array(
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/0-c.ogg','http://s3.amazonaws.com/tuning-website/notes/0-c.mp3'),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg','http://s3.amazonaws.com/tuning-website/notes/0-g.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/1-c.ogg','http://s3.amazonaws.com/tuning-website/notes/1-c.mp3'),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg','http://s3.amazonaws.com/tuning-website/notes/1-g.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/2-c.ogg','http://s3.amazonaws.com/tuning-website/notes/2-c.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/2-e.ogg','http://s3.amazonaws.com/tuning-website/notes/2-e.mp3')				
					);
				$title = 'Open C Major';
				$desc = '';
				break;
			case 'd-maj':
				$notes = array(
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/0-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-d.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/1-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-a.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/1-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-d.mp3'),
					array('F#', 'https://s3.amazonaws.com/tuning-website/notes/1-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-fsharp.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/2-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-a.mp3'),
					array('D#', 'https://s3.amazonaws.com/tuning-website/notes/2-dsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-dsharp.mp3')
				);
				$title = 'Open D Major';
				$desc = '';
				break;
			case 'e-maj':
				$notes = array(
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/0-e.ogg','http://s3.amazonaws.com/tuning-website/notes/0-e.mp3'),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/1-b.ogg','http://s3.amazonaws.com/tuning-website/notes/1-b.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/1-e.ogg','http://s3.amazonaws.com/tuning-website/notes/1-e.mp3'),
					array('G#', 'https://s3.amazonaws.com/tuning-website/notes/1-gsharp.ogg','http://s3.amazonaws.com/tuning-website/notes/1-gsharp.mp3'),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg','http://s3.amazonaws.com/tuning-website/notes/2-b.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/2-e.ogg','http://s3.amazonaws.com/tuning-website/notes/2-e.mp3')
				);
				$title = 'Open E Major';
				$desc = '';
				break;
			case 'f-maj':
				$notes = array(
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/0-c.ogg','http://s3.amazonaws.com/tuning-website/notes/0-c.mp3'),
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/0-f.ogg','http://s3.amazonaws.com/tuning-website/notes/0-f.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/1-c.ogg','http://s3.amazonaws.com/tuning-website/notes/1-c.mp3'),
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/1-f.ogg','http://s3.amazonaws.com/tuning-website/notes/1-f.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/2-a.ogg','http://s3.amazonaws.com/tuning-website/notes/2-a.mp3'),
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/2-f.ogg','http://s3.amazonaws.com/tuning-website/notes/2-f.mp3')				
					);
				$title = 'Open F Major';
				$desc = '';
				break;
			case 'g-maj':
				$notes = array(
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/0-d.ogg','http://s3.amazonaws.com/tuning-website/notes/0-d.mp3'),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg','http://s3.amazonaws.com/tuning-website/notes/0-g.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/1-d.ogg','http://s3.amazonaws.com/tuning-website/notes/1-d.mp3'),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg','http://s3.amazonaws.com/tuning-website/notes/1-g.mp3'),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg','http://s3.amazonaws.com/tuning-website/notes/2-b.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/2-d.ogg','http://s3.amazonaws.com/tuning-website/notes/2-d.mp3')
				);
				$title = 'Open G Major';
				$desc = '';
				break;
			default:
				$notes = array(
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/0-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-e.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/1-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-a.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/1-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-d.mp3'),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-g.mp3'),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-b.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/2-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-e.mp3')
				);
				$title = 'Guitar Tuner';
				break;
		}

?>