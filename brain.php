<?php

//The BRAIN

    
    	$tng = $_GET['t'];
		$notes = array();
		$title = '';
		switch($tng){
			case 'a-maj':
				$notes = array(
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/0-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-e.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/1-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-e.mp3'),
					array('C#', 'https://s3.amazonaws.com/tuning-website/notes/1-csharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-e.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/1-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-e.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/2-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-e.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/2-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-e.mp3')
				);
				$title = 'Open A Major';
				$desc = '';
				break;
			case 'b-maj':
				$notes = array(
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/0-b.ogg', ''),
					array('F#', 'https://s3.amazonaws.com/tuning-website/notes/0-fsharp.ogg', ''),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/1-b.ogg', ''),
					array('F#', 'https://s3.amazonaws.com/tuning-website/notes/1-fsharp.ogg', ''),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg', ''),
					array('D#', 'https://s3.amazonaws.com/tuning-website/notes/2-dsharp.ogg', '')
				);
				$title = 'Open B Major';
				$desc = '';
				break;
			case 'c-maj':
				$notes = array(
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/0-c.ogg',''),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg',''),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/1-c.ogg',''),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg',''),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/2-c.ogg',''),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/2-e.ogg','')				
					);
				$title = 'Open C Major';
				$desc = '';
				break;
			case 'd-maj':
				$notes = array(
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/0-d.ogg', ''),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/1-a.ogg', ''),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/1-d.ogg', ''),
					array('F#', 'https://s3.amazonaws.com/tuning-website/notes/1-fsharp.ogg', ''),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/2-a.ogg', ''),
					array('D#', 'https://s3.amazonaws.com/tuning-website/notes/2-dsharp.ogg', '')
				);
				$title = 'Open D Major';
				$desc = '';
				break;
			case 'e-maj':
				$notes = array(
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/0-e.ogg',''),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/1-b.ogg',''),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/1-e.ogg',''),
					array('G#', 'https://s3.amazonaws.com/tuning-website/notes/1-gsharp.ogg',''),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg',''),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/2-e.ogg','')
				);
				$title = 'Open E Major';
				$desc = '';
				break;
			case 'f-maj':
				$notes = array(
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/0-c.ogg',''),
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/0-f.ogg',''),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/1-c.ogg',''),
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/1-f.ogg',''),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/1-a.ogg',''),
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/2-f.ogg','')				
					);
				$title = 'Open F Major';
				$desc = '';
				break;
			case 'g-maj':
				$notes = array(
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/0-d.ogg',''),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg',''),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/1-d.ogg',''),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg',''),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg',''),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/2-d.ogg','')
				);
				$title = 'Open G Major';
				$desc = '';
				break;
			default:
				$notes = array(
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/0-e.ogg', ''),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/1-a.ogg', ''),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/1-d.ogg', ''),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg', ''),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg', ''),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/2-e.ogg', '')
				);
				$title = 'Guitar Tuner';
				break;
		}

?>