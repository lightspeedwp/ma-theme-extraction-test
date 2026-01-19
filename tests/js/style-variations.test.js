/**
 * @jest-environment jsdom
 */

const fs = require('fs');
const path = require('path');
const glob = require('glob');

describe('Style Variations Validation', () => {
	const stylesDir = path.join(__dirname, '..', '..', 'styles');
	
	// Get all JSON files in styles directory recursively
	const styleFiles = glob.sync('**/*.json', { cwd: stylesDir });

	test('styles directory exists', () => {
		expect(fs.existsSync(stylesDir)).toBe(true);
	});

	test('has style variation files', () => {
		expect(styleFiles.length).toBeGreaterThan(0);
	});

	styleFiles.forEach((file) => {
		describe(`${file}`, () => {
			let styleJson;
			const filePath = path.join(stylesDir, file);

			beforeAll(() => {
				const content = fs.readFileSync(filePath, 'utf8');
				styleJson = JSON.parse(content);
			});

			test('is valid JSON', () => {
				expect(styleJson).toBeDefined();
				expect(typeof styleJson).toBe('object');
			});

			test('has required top-level properties', () => {
				expect(styleJson).toHaveProperty('$schema');
				expect(styleJson).toHaveProperty('version');
				expect(styleJson.version).toBe(3);
				expect(styleJson).toHaveProperty('title');
				expect(typeof styleJson.title).toBe('string');
			});

			test('has styles or settings', () => {
				const hasStyles = styleJson.hasOwnProperty('styles');
				const hasSettings = styleJson.hasOwnProperty('settings');
				expect(hasStyles || hasSettings).toBe(true);
			});

			if (file.includes('blocks/')) {
				test('block style partial targets specific block', () => {
					expect(styleJson.styles).toHaveProperty('blocks');
					// Should target core/button or similar
					const blocks = Object.keys(styleJson.styles.blocks);
					expect(blocks.length).toBeGreaterThan(0);
				});
			}

			if (file.includes('sections/')) {
				test('section style partial targets specific block', () => {
					expect(styleJson.styles).toHaveProperty('blocks');
					// Should target core/group or similar
					const blocks = Object.keys(styleJson.styles.blocks);
					expect(blocks.length).toBeGreaterThan(0);
				});
			}
		});
	});
});
