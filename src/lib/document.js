// @ts-nocheck

export const setTitle = (_title = '') => {
	try {
        if (!document) return;
        _title = (_title ? _title + ' | ' : '') + 'Give Me My Data - A Facebook application to reclaim your information';
        document.title = _title;
        return _title;
	} catch (e) {
		// console.log(e);
	}
};
