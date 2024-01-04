// @ts-nocheck

export const setTitle = (_title = '') => {
	try {
		if (!document) return;
		document.title = (_title ? _title + ' | ' : '') + 'Give Me My Data - A Facebook application to reclaim your information';
	} catch (e) {
		// console.log(e);
	}
};
