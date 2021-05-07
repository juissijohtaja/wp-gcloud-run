import { registerBlockType } from '@wordpress/blocks';
import './style.scss';
import Edit from './edit';
import Save from './save';

registerBlockType( 'homehero/homehero', {
	apiVersion: 2,
    attributes: {
			message: {
					type: 'string',
					source: 'text',
					selector: 'div.herotitle',
					default: '', // empty default
			},
			buttontext: {
				type: 'string',
				source: 'text',
				selector: 'div.herobutton',
				default: '', // empty default
			},
			bg_color: { type: 'string', default: '#21759b' },
			button_color: { type: 'string', default: '#9b2176' },
    },
	edit: Edit,
	save: Save,
} );
