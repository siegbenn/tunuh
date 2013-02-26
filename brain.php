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
                
                
                
            case 'a-min':
				$notes = array(
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/0-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/0-e.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/1-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-a.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/1-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/1-e.mp3'),
					array('A', 'https://s3.amazonaws.com/tuning-website/notes/2-a.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-a.mp3'),
					array('C', 'https://s3.amazonaws.com/tuning-website/notes/2-c.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-c.mp3'),
					array('E', 'https://s3.amazonaws.com/tuning-website/notes/2-e.ogg', 'http://s3.amazonaws.com/tuning-website/notes/2-esharp.mp3')
				);
				$title = 'Open A Minor';
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
				$title = 'Open C Minor';
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
				$title = 'Open D Minor';
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
				$title = 'Open E Minor';
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
				$title = 'Open F Minor';
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
				$title = 'Open G Minor';
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
				$title = 'Drop D';
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
				$title = 'Drop C#/Db';
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
				$title = 'Drop C';
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
				$title = 'Drop B';
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
				$title = 'Drop A#/Bb';
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
				$title = 'Drop A';
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
				$title = 'Drop G';
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
				$title = 'Drop F#/Gb';
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
				$title = 'Drop F';
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
				$title = 'Drop E';
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
				$title = 'Drop D#/Eb';
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
				$title = 'Drop D1';
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
				$title = 'Raised F';
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
				$title = 'Raised F#/Gb';
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
				$title = 'Raised G (Terz)';
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
				$title = 'Raised G#/Ab';
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
				$title = 'Raised A';
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
				$title = 'Raised A#/Bb';
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