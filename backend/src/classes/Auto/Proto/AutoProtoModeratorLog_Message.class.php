<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.1.master at 2017-03-29 18:26:37                    *
 *   This file is autogenerated - do not edit.                               *
 *****************************************************************************/

	abstract class AutoProtoModeratorLog_Message extends ProtoModeratorLog
	{
		protected function makePropertyList()
		{
			return
				array_merge(
					parent::makePropertyList(),
					array(
						'message' => LightMetaProperty::fill(new LightMetaProperty(), 'message', null, 'string', null, 1000, false, true, false, null, null),
						'id' => LightMetaProperty::fill(new LightMetaProperty(), 'id', null, 'integerIdentifier', 'ModeratorLog_Message', 8, true, true, false, null, null)
					)
				);
		}
	}
?>