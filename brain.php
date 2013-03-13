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
				$title = 'Open A Major Tuning';
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
				$title = 'Open B Major Tuning';
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
				$title = 'Open C Major Tuning';
				$desc = '';
				break;
                
                
                
			case 'd-maj':
				$notes = array(
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/0-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-d.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/1-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-a.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/1-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-d.mp3'),
					array('F#', 'https://s3.amazonaws.com/tuning-website/notes/1-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-fsharp.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/2-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-a.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/2-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-d.mp3')
				);
				$title = 'Open D Major Tuning';
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
				$title = 'Open E Major Tuning';
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
				$title = 'Open F Major Tuning';
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
				$title = 'Open G Major Tuning';
				$desc = '';
				break;
                
                
                
            case 'a-min':
				$notes = array(
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/0-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-e.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/1-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-a.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/1-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-e.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/2-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-a.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/2-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-c.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/2-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-esharp.mp3')
				);
				$title = 'Open A Minor Tuning';
				$desc = '';
				break;
                
                
                
            case 'c-min':
				$notes = array(
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/0-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-c.mp3'),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-g.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/1-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-c.mp3'),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-g.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/2-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-c.mp3'),
					array('D#', 'https://s3.amazonaws.com/tuning-website/notes/2-dsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-dsharp.mp3')
				);
				$title = 'Open C Minor Tuning';
				$desc = '';
				break;
                
                
                
            case 'd-min':
				$notes = array(
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/0-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-d.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/1-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-a.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/1-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-d.mp3'),
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/1-f.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-f.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/2-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-a.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/2-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-d.mp3')
				);
				$title = 'Open D Minor Tuning';
				$desc = '';
				break;
                
                
                
            case 'e-min':
				$notes = array(
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/0-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-e.mp3'),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/1-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-b.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/1-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-e.mp3'),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-g.mp3'),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-b.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/2-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-e.mp3')
				);
				$title = 'Open E Minor Tuning';
				$desc = '';
				break;
                
                
                
            case 'f-min':
				$notes = array(
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/0-f.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-f.mp3'),
					array('G#', 'https://s3.amazonaws.com/tuning-website/notes/0-gsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-gsharp.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/1-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-c.mp3'),
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/1-f.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-f.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/2-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-c.mp3'),
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/2-f.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-f.mp3')
				);
				$title = 'Open F Minor Tuning';
				$desc = '';
				break;
                
                
                
            case 'g-min':
				$notes = array(
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/0-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-d.mp3'),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-g.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/1-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-d.mp3'),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-gsharp.mp3'),
					array('A#', 'https://s3.amazonaws.com/tuning-website/notes/2-asharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-asharp.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/2-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-d.mp3')
				);
				$title = 'Open G Minor Tuning';
				$desc = '';
				break;
                
                
                
            case 'drop-d':
    			$notes = array(
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/0-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-d.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/1-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-a.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/1-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-d.mp3'),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-g.mp3'),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-b.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/2-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-e.mp3')
				);
				$title = 'Drop D Tuning';
				$desc = '';
				break;
                
                
                
            case 'drop-db':
    			$notes = array(
					array('C#', 'https://s3.amazonaws.com/tuning-website/notes/0-csharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-csharp.mp3'),
					array('G#', 'https://s3.amazonaws.com/tuning-website/notes/0-gsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-gsharp.mp3'),
					array('C#', 'https://s3.amazonaws.com/tuning-website/notes/1-csharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-csharp.mp3'),
					array('F#', 'https://s3.amazonaws.com/tuning-website/notes/1-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-fsharp.mp3'),
					array('A#', 'https://s3.amazonaws.com/tuning-website/notes/2-asharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-asharp.mp3'),
					array('D#', 'https://s3.amazonaws.com/tuning-website/notes/2-dsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-dsharp.mp3')
				);
				$title = 'Drop C#/Db Tuning';
				$desc = '';
				break;
                
                
                
            case 'drop-c':
        		$notes = array(
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/0-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-c.mp3'),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-g.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/1-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-c.mp3'),
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/1-f.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-f.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/2-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-a.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/2-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-d.mp3')
				);
				$title = 'Drop C Tuning';
				$desc = '';
                break;
                
                
                
            case 'drop-b':
        		$notes = array(
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/0-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-b.mp3'),
					array('F#', 'https://s3.amazonaws.com/tuning-website/notes/0-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-fsharp.mp3'),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/1-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-b.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/1-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-e.mp3'),
					array('G#', 'https://s3.amazonaws.com/tuning-website/notes/1-gsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-gsharp.mp3'),
					array('C#', 'https://s3.amazonaws.com/tuning-website/notes/2-csharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-csharp.mp3')
				);
				$title = 'Drop B Tuning';
				$desc = '';
				break;
                
                
                
            case 'drop-bb':
            	$notes = array(
					array('A#', 'https://s3.amazonaws.com/tuning-website/notes/0-asharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-asharp.mp3'),
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/0-f.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-f.mp3'),
					array('A#', 'https://s3.amazonaws.com/tuning-website/notes/1-asharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-asharp.mp3'),
					array('D#', 'https://s3.amazonaws.com/tuning-website/notes/1-dsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-dsharp.mp3'),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-g.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/2-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-c.mp3')
				);
				$title = 'Drop A#/Bb Tuning';
				$desc = '';
				break;
                
                
                
            case 'drop-a':
            	$notes = array(
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/0-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-a.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/0-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-esharp.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/1-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-a.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/1-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-d.mp3'),
					array('F#', 'https://s3.amazonaws.com/tuning-website/notes/1-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-fsharp.mp3'),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-b.mp3')
				);
				$title = 'Drop A Tuning';
				$desc = '';
				break;
                
                
                
            case 'drop-g':
            	$notes = array(
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-g.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/1-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-d.mp3'),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-g.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/2-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-c.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/2-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-e.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/3-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/3-a.mp3')
				);
				$title = 'Drop G Tuning';
				$desc = '';
				break;
                
                
                
            case 'drop-gb':
            	$notes = array(
					array('F#', 'https://s3.amazonaws.com/tuning-website/notes/0-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-fsharp.mp3'),
					array('C#', 'https://s3.amazonaws.com/tuning-website/notes/1-csharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-csharp.mp3'),
					array('F#', 'https://s3.amazonaws.com/tuning-website/notes/1-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-fsharp.mp3'),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-b.mp3'),
					array('D#', 'https://s3.amazonaws.com/tuning-website/notes/2-dsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-dsharp.mp3'),
					array('G#', 'https://s3.amazonaws.com/tuning-website/notes/2-gsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-gsharp.mp3')
				);
				$title = 'Drop F#/Gb Tuning';
				$desc = '';
				break;
                
                
                
            case 'drop-f':
            	$notes = array(
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/0-f.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-f.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/1-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-c.mp3'),
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/1-f.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-f.mp3'),
					array('A#', 'https://s3.amazonaws.com/tuning-website/notes/2-asharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-asharp.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/2-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-d.mp3'),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/2-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-g.mp3')
				);
				$title = 'Drop F Tuning';
				$desc = '';
				break;
                
                
                
                
            case 'drop-e':
            	$notes = array(
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/0-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-e.mp3'),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/1-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-b.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/1-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-e.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/2-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-a.mp3'),
					array('C#', 'https://s3.amazonaws.com/tuning-website/notes/2-csharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-csharp.mp3'),
					array('F#', 'https://s3.amazonaws.com/tuning-website/notes/2-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-fsharp.mp3')
				);
				$title = 'Drop E Tuning';
				$desc = '';
				break;
                
                
                
            case 'drop-eb':
            	$notes = array(
					array('D#', 'https://s3.amazonaws.com/tuning-website/notes/0-dsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-dsharp.mp3'),
					array('A#', 'https://s3.amazonaws.com/tuning-website/notes/1-asharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-asharp.mp3'),
					array('D#', 'https://s3.amazonaws.com/tuning-website/notes/1-dsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-dsharp.mp3'),
					array('G#', 'https://s3.amazonaws.com/tuning-website/notes/1-gsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-gsharp.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/2-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-c.mp3'),
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/2-f.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-f.mp3')
				);
				$title = 'Drop D#/Eb Tuning';
				$desc = '';
				break;
                
                
                
            case 'drop-d1':
            	$notes = array(
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/0-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-d.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/1-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-a.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/1-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-d.mp3'),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-g.mp3'),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-b.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/2-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-e.mp3')
				);
				$title = 'Drop D1 Tuning';
				$desc = '';
				break;
                
                
                
            case 'raise-f':
                $notes = array(
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/0-f.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-f.mp3'),
					array('A#', 'https://s3.amazonaws.com/tuning-website/notes/1-asharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-asharp.mp3'),
					array('D#', 'https://s3.amazonaws.com/tuning-website/notes/1-dsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-dsharp.mp3'),
					array('G#', 'https://s3.amazonaws.com/tuning-website/notes/1-gsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-gsharp.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/2-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-c.mp3'),
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/2-f.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-f.mp3')
				);
				$title = 'Raised F Tuning';
				$desc = '';
				break;
                
                
                
            case 'raise-gb':
                $notes = array(
    				array('F#', 'https://s3.amazonaws.com/tuning-website/notes/0-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-fsharp.mp3'),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/1-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-b.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/1-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-e.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/2-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-a.mp3'),
					array('C#', 'https://s3.amazonaws.com/tuning-website/notes/2-csharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-csharp.mp3'),
					array('F#', 'https://s3.amazonaws.com/tuning-website/notes/2-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-fsharp.mp3')
				);
				$title = 'Raised F#/Gb Tuning';
				$desc = '';
				break;
                
                
                
            case 'raise-g':
                $notes = array(
        			array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-g.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/1-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-c.mp3'),
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/1-f.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-f.mp3'),
					array('A#', 'https://s3.amazonaws.com/tuning-website/notes/2-asharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-asharp.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/2-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-d.mp3'),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/2-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-g.mp3')
				);
				$title = 'Raised G (Terz) Tuning';
				$desc = '';
				break;
                
                
                
            case 'raise-ab':
                $notes = array(
            		array('G#', 'https://s3.amazonaws.com/tuning-website/notes/0-gsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-gsharp.mp3'),
					array('C#', 'https://s3.amazonaws.com/tuning-website/notes/1-csharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-csharp.mp3'),
					array('F#', 'https://s3.amazonaws.com/tuning-website/notes/1-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-fsharp.mp3'),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-b.mp3'),
					array('D#', 'https://s3.amazonaws.com/tuning-website/notes/2-dsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-dsharp.mp3'),
					array('G#', 'https://s3.amazonaws.com/tuning-website/notes/2-gsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-gsharp.mp3')
				);
				$title = 'Raised G#/Ab Tuning';
				$desc = '';
				break;
                
                
                
            case 'raise-a':
                $notes = array(
                	array('A', 'https://s3.amazonaws.com/tuning-website/notes/0-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-a.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/0-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-d.mp3'),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-g.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/1-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-c.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/1-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-e.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/2-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-a.mp3')
				);
				$title = 'Raised A Tuning';
				$desc = '';
				break; 
                
                
                
            case 'raise-bb':
                $notes = array(
                    array('A#', 'https://s3.amazonaws.com/tuning-website/notes/0-asharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-asharp.mp3'),
					array('D#', 'https://s3.amazonaws.com/tuning-website/notes/0-dsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-dsharp.mp3'),
					array('G#', 'https://s3.amazonaws.com/tuning-website/notes/0-gsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-gsharp.mp3'),
					array('C#', 'https://s3.amazonaws.com/tuning-website/notes/1-csharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-csharp.mp3'),
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/1-f.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-f.mp3'),
					array('A#', 'https://s3.amazonaws.com/tuning-website/notes/2-asharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-asharp.mp3')
				);
				$title = 'Raised A#/Bb Tuning';
				$desc = '';
				break;
                
                
                
            case 'low-eb':
                $notes = array(
                    array('D#', 'https://s3.amazonaws.com/tuning-website/notes/0-dsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-dsharp.mp3'),
    				array('G#', 'https://s3.amazonaws.com/tuning-website/notes/0-gsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-gsharp.mp3'),
					array('C#', 'https://s3.amazonaws.com/tuning-website/notes/1-csharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-csharp.mp3'),
					array('F#', 'https://s3.amazonaws.com/tuning-website/notes/1-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-fsharp.mp3'),
					array('A#', 'https://s3.amazonaws.com/tuning-website/notes/2-asharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-asharp.mp3'),
					array('D#', 'https://s3.amazonaws.com/tuning-website/notes/2-dsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-dsharp.mp3')
				);
				$title = 'Lowered D#/Eb Tuning';
				$desc = '';
				break; 
                
                
                
            case 'low-d':
                $notes = array(
                    array('D', 'https://s3.amazonaws.com/tuning-website/notes/0-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-d.mp3'),
        			array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-g.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/1-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-c.mp3'),
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/1-f.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-f.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/2-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-a.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/2-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-d.mp3')
				);
				$title = 'Lowered D Tuning';
				$desc = '';
				break;  
                
                
                
            case 'low-db':
                $notes = array(
                    array('C#', 'https://s3.amazonaws.com/tuning-website/notes/0-csharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-csharp.mp3'),
            		array('F#', 'https://s3.amazonaws.com/tuning-website/notes/0-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-fsharp.mp3'),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/1-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-b.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/1-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-e.mp3'),
					array('G#', 'https://s3.amazonaws.com/tuning-website/notes/1-gsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-gsharp.mp3'),
					array('C#', 'https://s3.amazonaws.com/tuning-website/notes/2-csharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-csharp.mp3')
				);
				$title = 'Lowered C#/Db Tuning';
				$desc = '';
				break; 
                
                
                
            case 'low-c':
                $notes = array(
                    array('C', 'https://s3.amazonaws.com/tuning-website/notes/0-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-c.mp3'),
                	array('F', 'https://s3.amazonaws.com/tuning-website/notes/0-f.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-f.mp3'),
					array('A#', 'https://s3.amazonaws.com/tuning-website/notes/1-asharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-asharp.mp3'),
					array('D#', 'https://s3.amazonaws.com/tuning-website/notes/1-dsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-dsharp.mp3'),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-g.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/2-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-c.mp3')
				);
				$title = 'Lowered C Tuning';
				$desc = '';
				break;
                
                
                
            case 'low-b':
                $notes = array(
                    array('B', 'https://s3.amazonaws.com/tuning-website/notes/0-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-b.mp3'),
                    array('E', 'https://s3.amazonaws.com/tuning-website/notes/0-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-e.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/1-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-a.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/1-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-d.mp3'),
					array('F#', 'https://s3.amazonaws.com/tuning-website/notes/1-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-fsharp.mp3'),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-b.mp3')
				);
				$title = 'Lowered B Tuning';
				$desc = '';
				break;
                
                
                
            case 'low-bb':
                $notes = array(
                    array('A#', 'https://s3.amazonaws.com/tuning-website/notes/0-asharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-asharp.mp3'),
                    array('D#', 'https://s3.amazonaws.com/tuning-website/notes/0-dsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-dsharp.mp3'),
    				array('G#', 'https://s3.amazonaws.com/tuning-website/notes/0-gsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-gsharp.mp3'),
					array('C#', 'https://s3.amazonaws.com/tuning-website/notes/1-csharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-csharp.mp3'),
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/1-f.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-f.mp3'),
					array('A#', 'https://s3.amazonaws.com/tuning-website/notes/2-asharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-asharp.mp3')
				);
				$title = 'Lowered A#/Bb Tuning';
				$desc = '';
				break;
                
                
                
            case 'low-a':
                $notes = array(
                    array('A', 'https://s3.amazonaws.com/tuning-website/notes/0-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-a.mp3'),
                    array('D', 'https://s3.amazonaws.com/tuning-website/notes/0-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-d.mp3'),
        			array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-g.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/1-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-c.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/1-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-e.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/2-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-a.mp3')
				);
				$title = 'Lowered A Tuning';
				$desc = '';
				break;
                
                
                
            case 'low-ab':
                $notes = array(
                    array('G#', 'https://s3.amazonaws.com/tuning-website/notes/0-gsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-gsharp.mp3'),
                    array('C#', 'https://s3.amazonaws.com/tuning-website/notes/1-csharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-csharp.mp3'),
            		array('F#', 'https://s3.amazonaws.com/tuning-website/notes/1-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-fsharp.mp3'),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-b.mp3'),
					array('D#', 'https://s3.amazonaws.com/tuning-website/notes/2-dsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-dsharp.mp3'),
					array('G#', 'https://s3.amazonaws.com/tuning-website/notes/2-gsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-gsharp.mp3')
				);
				$title = 'Lowered G#/Ab Tuning';
				$desc = '';
				break; 
                
                
                
            case 'low-g':
                $notes = array(
                    array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-g.mp3'),
                    array('C', 'https://s3.amazonaws.com/tuning-website/notes/1-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-c.mp3'),
                	array('F', 'https://s3.amazonaws.com/tuning-website/notes/1-f.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-f.mp3'),
					array('A#', 'https://s3.amazonaws.com/tuning-website/notes/2-asharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-asharp.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/2-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-d.mp3'),
					array('G', 'https://s3.amazonaws.com/tuning-website/notes/2-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-g.mp3')
				);
				$title = 'Lowered G Tuning';
				$desc = '';
				break;
                
                
                
            case 'low-gb':
                $notes = array(
                    array('F#', 'https://s3.amazonaws.com/tuning-website/notes/0-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-fsharp.mp3'),
                    array('B', 'https://s3.amazonaws.com/tuning-website/notes/1-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-b.mp3'),
                    array('E', 'https://s3.amazonaws.com/tuning-website/notes/1-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-e.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/2-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-a.mp3'),
					array('C#', 'https://s3.amazonaws.com/tuning-website/notes/2-csharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-csharp.mp3'),
					array('F#', 'https://s3.amazonaws.com/tuning-website/notes/2-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-fsharp.mp3')
				);
				$title = 'Lowered F#/Gb Tuning';
				$desc = '';
				break;
                
                
                
            case 'low-f':
                $notes = array(
                    array('F', 'https://s3.amazonaws.com/tuning-website/notes/0-f.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-f.mp3'),
                    array('A#', 'https://s3.amazonaws.com/tuning-website/notes/1-asharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-asharp.mp3'),
                    array('D#', 'https://s3.amazonaws.com/tuning-website/notes/1-dsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-dsharp.mp3'),
					array('G#', 'https://s3.amazonaws.com/tuning-website/notes/1-gsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-gsharp.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/2-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-c.mp3'),
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/2-f.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-f.mp3')
				);
				$title = 'Lowered F Tuning';
				$desc = '';
				break;  
                
                
                
            case 'modal-asus2':
                $notes = array(
                    array('E', 'https://s3.amazonaws.com/tuning-website/notes/0-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-e.mp3'),
                    array('A', 'https://s3.amazonaws.com/tuning-website/notes/1-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-a.mp3'),
                    array('B', 'https://s3.amazonaws.com/tuning-website/notes/1-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-b.mp3'),
    				array('E', 'https://s3.amazonaws.com/tuning-website/notes/1-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-e.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/2-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-a.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/2-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-e.mp3')
				);
				$title = 'Modal Asus&#50; Tuning';
				$desc = '';
				break;   
                
                
                
            case 'modal-asus4':
                $notes = array(
                    array('E', 'https://s3.amazonaws.com/tuning-website/notes/0-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-e.mp3'),
                    array('A', 'https://s3.amazonaws.com/tuning-website/notes/1-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-a.mp3'),
                    array('D', 'https://s3.amazonaws.com/tuning-website/notes/1-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-d.mp3'),
        			array('E', 'https://s3.amazonaws.com/tuning-website/notes/1-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-e.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/2-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-a.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/2-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-e.mp3')
				);
				$title = 'Modal Asus&#52; Tuning';
				$desc = '';
				break; 
                
                
                
            case 'modal-bsus4':
                $notes = array(
                    array('B', 'https://s3.amazonaws.com/tuning-website/notes/0-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-b.mp3'),
                    array('F#', 'https://s3.amazonaws.com/tuning-website/notes/0-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-fsharp.mp3'),
                    array('B', 'https://s3.amazonaws.com/tuning-website/notes/1-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-b.mp3'),
            		array('E', 'https://s3.amazonaws.com/tuning-website/notes/1-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-e.mp3'),
					array('F#', 'https://s3.amazonaws.com/tuning-website/notes/1-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-fsharp.mp3'),
					array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-b.mp3')
				);
				$title = 'Modal Bsus&#52; Tuning';
				$desc = '';
				break;
                
                
                
            case 'modal-c6':
                $notes = array(
                    array('C', 'https://s3.amazonaws.com/tuning-website/notes/0-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-c.mp3'),
                    array('A', 'https://s3.amazonaws.com/tuning-website/notes/1-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-a.mp3'),
                    array('C', 'https://s3.amazonaws.com/tuning-website/notes/1-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-c.mp3'),
                	array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-g.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/2-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-c.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/2-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-e.mp3')
				);
				$title = 'Modal C&#54; Tuning';
				$desc = '';
				break;
                
                
                
            case 'modal-open-page':
                $notes = array(
                    array('D', 'https://s3.amazonaws.com/tuning-website/notes/0-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-d.mp3'),
                    array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-g.mp3'),
                    array('C', 'https://s3.amazonaws.com/tuning-website/notes/1-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-c.mp3'),
                    array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-g.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/2-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-c.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/2-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-d.mp3')
				);
				$title = 'Modal Open Page Tuning';
				$desc = '';
				break; 
                
                
                
            case 'modal-csus2':
                $notes = array(
                    array('C', 'https://s3.amazonaws.com/tuning-website/notes/0-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-c.mp3'),
                    array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-g.mp3'),
                    array('C', 'https://s3.amazonaws.com/tuning-website/notes/1-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-c.mp3'),
                    array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-g.mp3'),
    				array('C', 'https://s3.amazonaws.com/tuning-website/notes/2-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-c.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/2-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-d.mp3')
				);
				$title = 'Modal Csus&#50 Tuning';
				$desc = '';
				break; 
                
                
                
            case 'modal-csus4':
                $notes = array(
                    array('C', 'https://s3.amazonaws.com/tuning-website/notes/0-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-c.mp3'),
                    array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-g.mp3'),
                    array('C', 'https://s3.amazonaws.com/tuning-website/notes/1-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-c.mp3'),
                    array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-g.mp3'),
        			array('C', 'https://s3.amazonaws.com/tuning-website/notes/2-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-c.mp3'),
					array('F', 'https://s3.amazonaws.com/tuning-website/notes/2-f.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-f.mp3')
				);
				$title = 'Modal Csus&#52 Tuning';
				$desc = '';
				break;
                
                
                
             case 'modal-c15':
                $notes = array(
                    array('C', 'https://s3.amazonaws.com/tuning-website/notes/0-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-c.mp3'),
                    array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-g.mp3'),
                    array('D', 'https://s3.amazonaws.com/tuning-website/notes/1-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-d.mp3'),
                    array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-g.mp3'),
            		array('C', 'https://s3.amazonaws.com/tuning-website/notes/2-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-c.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/2-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-d.mp3')
				);
				$title = 'Modal C&#49&#53 Tuning';
				$desc = '';
				break;
                
                
                
            case 'modal-low-c':
                $notes = array(
                    array('C', 'https://s3.amazonaws.com/tuning-website/notes/0-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-c.mp3'),
                    array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-g.mp3'),
                    array('D', 'https://s3.amazonaws.com/tuning-website/notes/1-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-d.mp3'),
                    array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-g.mp3'),
                	array('A', 'https://s3.amazonaws.com/tuning-website/notes/2-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-a.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/2-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-d.mp3')
				);
				$title = 'Modal Low C Tuning';
				$desc = '';
				break;
                
                
                
            
            case 'modal-dsus4':
                $notes = array(
                    array('D', 'https://s3.amazonaws.com/tuning-website/notes/0-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-d.mp3'),
                    array('A', 'https://s3.amazonaws.com/tuning-website/notes/1-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-a.mp3'),
                    array('D', 'https://s3.amazonaws.com/tuning-website/notes/1-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-d.mp3'),
                    array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-g.mp3'),
                    array('A', 'https://s3.amazonaws.com/tuning-website/notes/2-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-a.mp3'),
					array('D', 'https://s3.amazonaws.com/tuning-website/notes/2-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-d.mp3')
				);
				$title = 'Modal Dsus&#52 Tuning';
				$desc = '';
				break; 
                
                
                
            case 'modal-esus4':
                $notes = array(
                    array('E', 'https://s3.amazonaws.com/tuning-website/notes/0-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-e.mp3'),
                    array('B', 'https://s3.amazonaws.com/tuning-website/notes/1-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-b.mp3'),
                    array('E', 'https://s3.amazonaws.com/tuning-website/notes/1-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-e.mp3'),
                    array('A', 'https://s3.amazonaws.com/tuning-website/notes/2-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-a.mp3'),
                    array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-b.mp3'),
    				array('E', 'https://s3.amazonaws.com/tuning-website/notes/2-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-e.mp3')
				);
				$title = 'Modal Esus&#52 Tuning';
				$desc = '';
				break;
                
                
                
            case 'modal-g6':
                $notes = array(
                    array('D', 'https://s3.amazonaws.com/tuning-website/notes/0-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-d.mp3'),
                    array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-g.mp3'),
                    array('D', 'https://s3.amazonaws.com/tuning-website/notes/1-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-d.mp3'),
                    array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-g.mp3'),
                    array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-b.mp3'),
        			array('E', 'https://s3.amazonaws.com/tuning-website/notes/2-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-e.mp3')
				);
				$title = 'Modal G&#54 Tuning';
				$desc = '';
				break; 
                
                
                
            case 'modal-gsus2':
                $notes = array(
                    array('D', 'https://s3.amazonaws.com/tuning-website/notes/0-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-d.mp3'),
                    array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-g.mp3'),
                    array('D', 'https://s3.amazonaws.com/tuning-website/notes/1-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-d.mp3'),
                    array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-g.mp3'),
                    array('A', 'https://s3.amazonaws.com/tuning-website/notes/2-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-a.mp3'),
            		array('D', 'https://s3.amazonaws.com/tuning-website/notes/2-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-d.mp3')
				);
				$title = 'Modal Gsus&#50 Tuning';
				$desc = '';
				break;   
                
                
                
            case 'modal-gsus4':
                $notes = array(
                    array('D', 'https://s3.amazonaws.com/tuning-website/notes/0-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-d.mp3'),
                    array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-g.mp3'),
                    array('D', 'https://s3.amazonaws.com/tuning-website/notes/1-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-d.mp3'),
                    array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-g.mp3'),
                    array('C', 'https://s3.amazonaws.com/tuning-website/notes/2-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-c.mp3'),
                	array('D', 'https://s3.amazonaws.com/tuning-website/notes/2-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-d.mp3')
				);
				$title = 'Modal Gsus&#52 Tuning';
				$desc = '';
				break; 
                
                
                
            case 'modal-e-modal':
                $notes = array(
                    array('E', 'https://s3.amazonaws.com/tuning-website/notes/0-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-e.mp3'),
                    array('B', 'https://s3.amazonaws.com/tuning-website/notes/1-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-b.mp3'),
                    array('E', 'https://s3.amazonaws.com/tuning-website/notes/1-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-e.mp3'),
                    array('E', 'https://s3.amazonaws.com/tuning-website/notes/1-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-e.mp3'),
                    array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-b.mp3'),
                    array('E', 'https://s3.amazonaws.com/tuning-website/notes/2-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-e.mp3')
				);
				$title = 'E Modal Tuning';
				$desc = '';
				break;   
                
                
                
            case 'modal-g-modal':
                $notes = array(
                    array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-g.mp3'),
                    array('G', 'https://s3.amazonaws.com/tuning-website/notes/0-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-g.mp3'),
                    array('D', 'https://s3.amazonaws.com/tuning-website/notes/1-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-d.mp3'),
                    array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-g.mp3'),
                    array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-b.mp3'),
                    array('D', 'https://s3.amazonaws.com/tuning-website/notes/2-d.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-d.mp3')
    			);
				$title = 'G Modal Tuning';
				$desc = '';
				break;       
                
                
                
            case 'modal-b-modal':
                $notes = array(
                    array('B', 'https://s3.amazonaws.com/tuning-website/notes/0-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-b.mp3'),
                    array('F#', 'https://s3.amazonaws.com/tuning-website/notes/0-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-fsharp.mp3'),
                    array('C#', 'https://s3.amazonaws.com/tuning-website/notes/1-csharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-csharp.mp3'),
                    array('F#', 'https://s3.amazonaws.com/tuning-website/notes/1-fsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-fsharp.mp3'),
                    array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-b.mp3'),
                    array('D#', 'https://s3.amazonaws.com/tuning-website/notes/2-dsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-dsharp.mp3')
    			);
				$title = 'B Modal Tuning';
				$desc = '';
				break;  
                
                
                
            case 'modal-e-modal':
                $notes = array(
                    array('E', 'https://s3.amazonaws.com/tuning-website/notes/0-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-e.mp3'),
                    array('B', 'https://s3.amazonaws.com/tuning-website/notes/1-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-b.mp3'),
                    array('E', 'https://s3.amazonaws.com/tuning-website/notes/1-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-e.mp3'),
                    array('E', 'https://s3.amazonaws.com/tuning-website/notes/1-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-e.mp3'),
                    array('B', 'https://s3.amazonaws.com/tuning-website/notes/2-b.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-b.mp3'),
                    array('E', 'https://s3.amazonaws.com/tuning-website/notes/2-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-e.mp3')
    			);
				$title = 'E Modal Tuning';
				$desc = '';
				break;   
                
                
                
            case 'modal-asharp-modal':
                $notes = array(
                    array('A#', 'https://s3.amazonaws.com/tuning-website/notes/0-asharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-asharp.mp3'),
                    array('F', 'https://s3.amazonaws.com/tuning-website/notes/0-f.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-f.mp3'),
                    array('A#', 'https://s3.amazonaws.com/tuning-website/notes/1-asharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-asharp.mp3'),
                    array('D#', 'https://s3.amazonaws.com/tuning-website/notes/1-dsharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-dsharp.mp3'),
                    array('G', 'https://s3.amazonaws.com/tuning-website/notes/1-g.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-g.mp3'),
                    array('A#', 'https://s3.amazonaws.com/tuning-website/notes/2-asharp.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-asharp.mp3')
    			);
				$title = 'A# Modal Tuning';
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