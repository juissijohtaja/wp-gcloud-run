import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
 
const Save = ({ attributes }) => {
	return (
		<div { ...useBlockProps.save() }
			style={ { backgroundColor: attributes.bg_color, } }
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