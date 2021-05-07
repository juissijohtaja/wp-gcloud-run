import { __ } from '@wordpress/i18n';
import { useState } from '@wordpress/element';

import { 
	useBlockProps,
	ColorPalette,
	InspectorControls,
	BlockControls,
	AlignmentToolbar,
	URLPopover
} from '@wordpress/block-editor';

import './editor.scss';
 
import { 
	TextControl,
	PanelBody,
	PanelRow,
	ToolbarGroup, 
	ToolbarButton,
	Button,
	ToggleControl
} from '@wordpress/components';

import { 
	Fragment, 
} from '@wordpress/element';

import {
	link,
	edit,
	keyboardReturn
} from '@wordpress/icons';
 
const Edit = ({ attributes, setAttributes }) => {
	const onChangeBGColor = ( hexColor ) => {
		setAttributes( { bg_color: hexColor } );
	};

	const onChangeTextColor = ( hexColor ) => {
			setAttributes( { button_color: hexColor } );
	};

	const [ isVisible, setVisiblility ] = useState( false );
	const [ url, setUrl ] = useState( '' );
	const close = () => setVisiblility( false );
	const setTarget = () => {};
	const setLink = event => {
		console.log(event.target.value)
		setUrl(event.target.value)
	}

	return (
		<Fragment>
			<InspectorControls key="setting">
				<PanelBody
					title={__('Background Color')}
					initialOpen={true}
				>
					<PanelRow>
						<ColorPalette
							onChange={ onChangeBGColor }
						/>
					</PanelRow>
				</PanelBody>
				<PanelBody
					title={__('Button Color')}
					initialOpen={true}
				>
					<PanelRow>
						<ColorPalette
							onChange={ onChangeTextColor }
						/>
					</PanelRow>
				</PanelBody>
			</InspectorControls>
			<BlockControls>
				<AlignmentToolbar
						//value={ alignment }
						//onChange={ onChangeAlignment }
				/>
				<ToolbarGroup>
					<ToolbarButton
						icon={ edit }
						label="Edit"
						onClick={ () => alert( 'Editing' ) }
					/>
					<ToolbarButton
						icon={ link }
						label="Link"
						onClick={ () => setVisiblility( true ) }
					/>
					{ isVisible && (
						<URLPopover
							onClose={ close }
							renderSettings={ () => (
								<ToggleControl
									label={ __( 'Open in new tab' ) }
									onChange={ setTarget }
								/>
							) }
						>
							<form onSubmit={ close }>
								<input type="url" value={ url } onChange={ setLink } />
								<Button
									icon={ keyboardReturn }
									label={ __( 'Apply' ) }
									type="submit"
								/>
							</form>
						</URLPopover>
					) }
				</ToolbarGroup>
			</BlockControls>

			<div { ...useBlockProps() }
				style={ {
					backgroundColor: attributes.bg_color,
				} }
			>
				<div className='herocontent'>
					<div className='herotitle'>
						<TextControl
							value={ attributes.message }
							onChange={ ( val ) => setAttributes( { message: val } ) }
						/>
					</div>
					<div className='herobutton'>
							<TextControl
								value={ attributes.buttontext }
								onChange={ ( val ) => setAttributes( { buttontext: val } ) }
								style={ {
									backgroundColor: attributes.button_color,
								} }
							/>
					</div>
				</div>
			</div>
		</Fragment>
	)
}
export default Edit