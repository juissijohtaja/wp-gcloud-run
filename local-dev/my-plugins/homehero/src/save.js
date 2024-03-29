import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
 
const Save = ({ attributes }) => {

	const blockStyle = {
		backgroundImage: attributes.mediaUrl != 0 ? 'url("' + attributes.mediaUrl + '")' : 'none',
		backgroundSize: 'cover',
		backgroundPosition: 'center',
		backgroundColor: attributes.bg_color,
	}

	return (
		<div { ...useBlockProps.save() }
			style={blockStyle}
		>
			<div className='herocontent'>
				<div className='herotitle'>
					{ attributes.message }
				</div>
				<div className='herobutton'
					style={ {
						backgroundColor: attributes.button_color,
					} }
				>
						{ attributes.buttontext }
				</div>
			</div>
		</div>
	)
}

export default Save