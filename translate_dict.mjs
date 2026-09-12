import fs from 'fs';
import { translate } from '@vitalets/google-translate-api';

const strings = JSON.parse(fs.readFileSync('extracted_strings.json', 'utf8'));
const langs = ['id', 'de', 'nl', 'ja'];

// Ensure en.json is populated
let enDict = {};
if (fs.existsSync('lang/en.json')) {
    enDict = JSON.parse(fs.readFileSync('lang/en.json', 'utf8'));
}
for (const str of strings) {
    if (!enDict[str]) enDict[str] = str;
}
fs.writeFileSync('lang/en.json', JSON.stringify(enDict, null, 4));

async function process() {
    for (const lang of langs) {
        let existing = {};
        if (fs.existsSync(`lang/${lang}.json`)) {
            existing = JSON.parse(fs.readFileSync(`lang/${lang}.json`, 'utf8'));
        }
        
        let count = 0;
        for (const str of strings) {
            if (!existing[str]) {
                try {
                    const res = await translate(str, { to: lang });
                    existing[str] = res.text;
                    count++;
                    if (count % 20 === 0) console.log(`[${lang}] Translated ${count} strings...`);
                    // Delay to avoid rate limiting
                    await new Promise(r => setTimeout(r, 200));
                } catch (e) {
                    console.error("Error translating:", str, e.message);
                    await new Promise(r => setTimeout(r, 2000)); // wait longer on error
                }
            }
        }
        
        fs.writeFileSync(`lang/${lang}.json`, JSON.stringify(existing, null, 4));
        console.log(`Finished ${lang}, added ${count} new translations.`);
    }
}

process();
