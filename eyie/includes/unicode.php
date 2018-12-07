<div onclick="closeIt()" id="unicodeOutput"></div>
  

	<div id="buttons" class="buttons container">
             <h4>Display a Unicode (or ASCII) Chart:</h4>
		<h3 type="button" class="btn btn-primary btn-block" onclick="openSec('west')">Latin Alphabet (Basic ASCII & 2nd byte extensions)</h3>
                 <div id="west" style="display:none">
		<button class="unicode"  onclick="displayChars(0,32,127)">7-bit ASCII</button>
		<button class="unicode" onclick="displayChars(1,0x0080,0x00FF)">8-bit ASCII Supplement</button>
		<button class="unicode" onclick="displayChars(2,0x0100,0x017F)">Latin Extended-A </button>
        <button class="unicode" onclick="displayChars(3,0x0180,0x024F)">Latin Extended-B</button>
		<button class="unicode" onclick="displayChars(4,0x0250,0x036F)">International Phonetic Alphabet</button>
		<!--<button onclick="displayChars(5,0x1e00,0x1eff)">Latin Extended Additional</button>
		

                <button onclick="displayChars(6,0x2c60,0x2c7f)">Extended-C</button>
                <button onclick="displayChars(7,0xa720,0xa7ff)">Extended-D</button>
                <button onclick="displayChars(8,0xab30,0xab6f)">Extended-E</button>
         -->
	         </div>
       
		<h3 type="button" class="btn btn-primary btn-block" onclick="openSec('east')">Greek, Cyrillic & other Greek-derived alphabets</h3>
                <div id="east" style="display:none">
		<button class="unicode" onclick="displayChars(5,0x0370,0x03FF)">Greek</button>
		<button class="unicode" onclick="displayChars(6,0x1f00,0x1fff)">Greek Extended</button>
		<button class="unicode" onclick="displayChars(7,0x0400,0x04ff)">Cyrillic</button>
		<button class="unicode" onclick="displayChars(8,0x0530,0x058f)">Armenian</button>
        <button class="unicode" onclick="displayChars(9,0x10a0,0x10ff)">Georgian</button>
                </div>


        <h3 type="button" class="btn btn-primary btn-block" onclick="openSec('abjabs')">Middle Eastern Abjads</h3>
                 <div id="abjabs" style="display:none">
		<button class="unicode" onclick="displayChars(10,0x0590,0x05ff)">Hebrew</button>
		<button class="unicode" onclick="displayChars(11,0xfb00,0xfb4f)">Alphabetic Presentation Forms</button>
		<button class="unicode" onclick="displayChars(12,0x0600,0x06ff)">Arabic</button>
		<button class="unicode" onclick="displayChars(13,0xfb50,0xfefe)">Arabic Presentation Forms</button>
		<button class="unicode" onclick="displayChars(14,0x0700,0x074f)">Syriac</button>
	         </div>                 

		<h3 type="button" class="btn btn-primary btn-block" onclick="openSec('brahmi')">Abugidas of India and Southeast Asia</h3>
                <div id="brahmi" style="display:none">
		<button class="unicode" onclick="displayChars(15,0x0900,0x097F)">Devanagari</button>
		<button class="unicode" onclick="displayChars(16,0x0980,0x09ff)">Bengali</button>
		<button class="unicode" onclick="displayChars(17,0x0A00,0x0a7f)">Gurmukhi</button>
		<button class="unicode" onclick="displayChars(18,0x0b00,0x0b7f)">Oriya</button>
		<button class="unicode" onclick="displayChars(19,0x0B80,0x0bff)">Tamil</button>
		<button class="unicode" onclick="displayChars(20,0x0c00,0x0c7f)">Telugu</button>
		<button class="unicode" onclick="displayChars(21,0x0c80,0x0cff)">Kannada</button>
		<button class="unicode" onclick="displayChars(22,0x0d00,0x0d7f)">Malayalam</button>
		<button class="unicode" onclick="displayChars(23,0x0d80,0x0dff)">Sinhala</button>
		<button class="unicode" onclick="displayChars(24,0x0e00,0x0e7f)">Thai</button>
		<button class="unicode" onclick="displayChars(25,0x0e80,0x0eff)">Lao</button>
		<button class="unicode" onclick="displayChars(26,0x0f00,0x0fff)">Tibetan</button>
		<button class="unicode" onclick="displayChars(27,0x1000,0x109f)">Myanmar</button>
		<button class="unicode" onclick="displayChars(28,0x1780,0x17ff)">Khmer</button>
		<!--
                <button onclick="displayChars(33,0x1bc0,0x1bff)">Batak</button>
               <button onclick="displayChars(34,0x1b80,0x1ccf)">Sundanese</button>
                <button onclick="displayChars(35,0xa980,0xa9df)">Javanese</button>
                <button onclick="displayChars(36,0x1b00,0x1b7f)">Balinese</button>
                <button onclick="displayChars(37,0x1a00,0x1a1f)">Lontara</button>
                <button onclick="displayChars(38,0x1720,0x173f)">Hanuno'o</button>-->
	        </div>

        

		<h3 type="button" class="btn btn-primary btn-block" onclick="openSec('other')">Other Alphabets & Syllabaries</h3>
                 <div id="other" style="display:none">
        <button class="unicode" onclick="displayChars(29,0x1200,0x137F)">Ethiopic</button>
        <button class="unicode" onclick="displayChars(30,0x1680,0x169f)">Ogham</button>
        <button class="unicode" onclick="displayChars(31,0x1800,0x18af)">Mongolian</button>
        <button class="unicode" onclick="displayChars(32,0x0780,0x07bf)">Thaana</button>
		<button class="unicode" onclick="displayChars(33,0x1380,0x13ff)">Cherokee</button>
		<button class="unicode" onclick="displayChars(34,0x1400,0x167f)">Cree</button>
        <button class="unicode" onclick="displayChars(35,0x18b0,0x18ff)">Cree extended</button>
        <button class="unicode" onclick="displayChars(36,0x07c0,0x07ff)">N'ko</button>
		<button class="unicode" onclick="displayChars(37,0x2800,0x28FF)">Braille Patterns</button>
	        </div>

		<h3 type="button" class="btn btn-warning btn-block" onclick="openSec('dingbats')">Symbols, Shapes, Punctuation & Dingbats</h3>
                <div id="dingbats" style="display:none">
		<button class="unicode" onclick="displayChars(38,0x2000,0x206f)">General Punctuation</button>
		<button class="unicode" onclick="displayChars(39,0x2070,0x209f)">Superscripts and Subscripts</button>
		<button class="unicode" onclick="displayChars(40,0x20A0,0x20cf)">Currency Symbols</button>
		
		<button class="unicode" onclick="displayChars(41,0x2100,0x218f)">Number Forms</button>
		<button class="unicode" onclick="displayChars(42,0x2190,0x21ff)">Arrows</button>
		<button class="unicode" onclick="displayChars(43,0x2200,0x22ff)">Mathematical Operators</button>
		<button class="unicode" onclick="displayChars(44,0x2300,0x23ff)">Miscellaneous Technical</button>
		<button class="unicode" onclick="displayChars(45,0x2400,0x243f)">Control Pictures</button>
		
		<button class="unicode" onclick="displayChars(46,0x2460,0x24ff)">Enclosed Alphanumerics</button>
		<button class="unicode" onclick="displayChars(47,0x2500,0x257f)">Block Elements</button>
		<button class="unicode" onclick="displayChars(48,0x25A0,0x25ff)">Geometric Shapes</button>
		<button class="unicode" onclick="displayChars(49,0x2600,0x26ff)">Miscellaneous Symbols</button>
		<button class="unicode" onclick="displayChars(50,0x2700,0x27bf)">Dingbats</button>
                </div>

		<h3 type="button" class="btn btn-info btn-block" onclick="openSec('cjk')">Chinese, Japanese, Korean Unified Logographs</h3>
	           <div id="cjk" style="display:none">

	    <button class="unicode" onclick="displayChars(51,0x4e00,0x9fff)">CJK Unified Ideographs</button>
	    <button class="unicode" onclick="displayChars(52,0x3400,0x4db5)">CJK Unified Ideographs Extention A</button>
		<button class="unicode" onclick="displayChars(53,0xf900,0xfaff)">CJK Compatibility Ideographs</button>
		
		<button class="unicode" onclick="displayChars(54,0x2e80,0x2eff)">CJK Radicals Supplement</button>
		<button class="unicode" onclick="displayChars(55,0x3000,0x303f)">CJK Symbols and Punctuation</button>
		<!--
		<button onclick="displayChars(64,0x2f00,0x2fdf)">Kangxi Radicals</button>
		<button onclick="displayChars(71,0x3200,0x32ff)">Enclosed CJK Letters and Months</button>
		<button onclick="displayChars(72,0x3300,0x33ff)">CJK Compatibility</button>
		<button onclick="displayChars(79,0xfe30,0xfe4f)">CJK Compatibility Forms</button>
		<button onclick="displayChars(80,0xfe50,0xfe6f)">Small Form Variants</button>
		
	
		<button onclick="displayChars(81,0xff00,0xffef)">Halfwidth and Fullwidth Forms</button>
	          </div>
		-->
		</div>
		<h3 type="button" class="btn btn-info btn-block" onclick="openSec('cjk2')">Chinese, Japanese, Korean Syllabaries & Alphabets</h3>
	           <div id="cjk2" style="display:none">
		

		<button class="unicode" onclick="displayChars(56,0x3100,0x312f)">Bopomofo</button>
		<button class="unicode" onclick="displayChars(57,0x31A0,0x31bf)">Bopomofo Extended</button>

		<button class="unicode" onclick="displayChars(58,0xA000,0xA48F)">Yi Syllables</button>
		<button class="unicode" onclick="displayChars(59,0xA490,0xA4cf)">Yi Radicals</button>

		<button class="unicode" onclick="displayChars(60,0x3190,0x319f)">Kanbun</button>
		<button class="unicode" onclick="displayChars(61,0x3040,0x309f)">Hiragana</button>
		<button class="unicode" onclick="displayChars(62,0x30A0,0x30ff)">Katakana</button>
		
		<button class="unicode" onclick="displayChars(63,0x1100,0x11ff)">Hangul Jamo</button>
		<button class="unicode" onclick="displayChars(64,0x3130,0x318f)">Hangul Compatibility Jamo</button>
		<button class="unicode" onclick="displayChars(65,0xAC00,0xD7A3)">Hangul Syllables</button>
		
		
		
		</div>
		
		
         <h3 type="button" class="btn btn-danger btn-block" onclick="openSec('all')">Can't find it? Just display everything </h3>
            <div id="all" style="display:none;">
              (Warning: this can take awhile)
               <button class="unicode" onclick="displayChars(66,0x0020,0x2e7f)">1st 11,903 characters</button>
                <button class="unicode" onclick="displayChars(67,0x2e80,0xFFFF)">Everything Else</button>
	</div>
	</div>
	
<div id="aboutUnicode" class="container" style="clear:both">
<h3>About Unicode </h3>
	
<p>Computers have a convenient and efficient system for storing and displaying commonly used characters like letters, numbers, mathematical symbols, and dingbats. 
	Unlike images that are rendered pixel by pixel, characters are stored as codes that the computer looks up and displays as you press the keys on the keyboard or type 
	the <a href="http://entity-lookup.leftlogic.com/">character's numeric code</a>. Earlier versions of this system used 7 bits (or on/off switches) of an 8-bit (1 byte)
	system to encode 128 characters. One standardized arrangement known as the beloved ASCII allowed for most Arabic numerals, Latin letters, and a few additional characters, such as punctuation points
	and the "@" sign, commonly used by English-speaking folks. The additional 8th bit was originally set aside for different languages to customize with different standards 
	that could be swapped in and out. This allowed for an additional 128 characters or 
	a total of 256 characters. Hence this is why we often think 1 byte (8 bits) equals one typed character. Each character you type on a computer equaled 1 byte of storage. This is sometimes 
	still the case, like when you are typing an ASCII character, but things are little more sophisticated now. Processors are faster and smarter. 
	They can figure out that they will need more bytes to store non-ASCII characters. So for example the letter "A" is stored with one byte, while "Ω", "ॠ" and "ܓ" uses 2 bytes.

	<p>The original 1 byte arrangement worked for most alphabets that can fit into 128 characters, but posed a problem for the thousands of symbols and characters used 
	in Chinese and other languages, like Japanese, that use Chinese characters. 
	Unicode was first developed in the 1980s. Unicode developers originally tried to fit everything into 16 bits or 2 bytes, which allow for 65,535 characters. Considering that 
	traditional Chinese alone has some 40,000 characters, even this turned out to be a tight squeeze. Now that processors are faster and smarter, the actual number
	of bytes a computer uses for encoding characters is up to 6, but Unicode still lives as the de facto standard.</p>
<p>The lists above include some of the alphabets, scripts, and writing systems commonly used today. Choose a category and then a specific script to display a list of characters and their 
	numeric code. The first number is the hexadecimal code followed by the decimal code (in brackets) and then the symbol. Whether or not you see the character is going to depend 
	on your computer's operating system and the browser used. Not all characters are supported by all computers and browsers (and other software applications like word processors) 
	may not display every character. For more information, see the <a href="http://unicode.org">Unicode Consortium website</a>.</p>

<div class="image"><img src="img/WritingSystemsoftheWorld.png"></div>
<br>
<span style="float:right">Click here for larger image: <a href="http://upload.wikimedia.org/wikipedia/commons/0/08/WritingSystemsoftheWorld.png">23protie/wikimedia commons</a></span>
<br><br>
<h3>A little background on why the world needs so much character storage...</h3>
<p>
The first alphabet appeared about 3,000 years ago in Mediterranean coastal villages near the border of present-day Israel and Lebanon. These villages were occupied by merchants and traders known as Phoenicians. 
Their 'alphabet' was actually more accurately known as an abjad, a consonantal alphabet in which consonant sounds were represented by symbols and the vowel sounds were inferred. 
In modern abjads, consonants are represented by diacritics. The modern Middle Eastern languages of <strong>Hebrew</strong>, <strong>Arabic</strong>, and Syriac <strong>Aramaic</strong> 
(a language of small Christian communities in northern Iraq and Syria) are among the few existing Abjads. 
<p>The Greeks borrowed the Phoenician abjad, modified it a bit, 
added separate symbols for vowels and developed the first true alphabet. The <strong>Greek</strong> alphabet influenced the development of the
<strong>Cyrillic</strong> and <strong>Latin</strong> alphabets. 
<p>Other systems of written symbols, known as abugidas, combine a consonant and vowel sound into a single symbol. Abugidas are also called syllabaries. 
The most widespread group of abugidas are the Brahmic scripts used for many languages of India and Southeast
Asia. The original Brahmic script was the Greek alphabet of the East. It took the Middle Eastern abjab, added an innovation to it in the form of consonant/vowel symbols and give rise 
to <strong>Devanagari</strong>, <strong>Thai</strong>, <strong>Tibetan</strong> and most other scripts in south and southeast Asia.
The only big exception being Chinese.
<p>The abjabs, and their alphabet &amp; abugida offsprings, were not the first attempt to symbolize the spoken language in the form of characters. Writing first originated some 5000 years ago independently in
 four parts of the world: the Nile river valley Egypt, the Euphrates river valley of southeastern Iraq, the Indus Valley of Pakistan, and China. A fifth writing system was developed by the Mayans
 on the Yucatan peninsula some time in the 4th century BC. 
 All of these scripts started out as logographs or ideographs, which essentially means written characters represent a meaningful unit of spoken thoughts. 
 "Cat", "Dog", "Sun", "Moon" and "Go Away" each had their own symbol. 
<p>No true logographs exist today, but the modern Chinese script comes closest, and the only one of the original five writing systems still used today. 
There are some 40,000 characters represented in traditional Chinese writing. The Chinese script was exported (or imported) in several
areas outside China, most notably Japan, Korea and Vietnam. The developers of Unicode tried to take all these variations of the Chinese script and combine them into a <strong>unified Chinese-Japanese-Korean-Vietnamese
(CJKV) or CJK </strong>system, but not without some degree of controversy. 
<p> Throughout the centuries, and in different parts of Southeast Asia, there were attempts to modify or simplify the Chinese system leaving us with several hybrid systems of 
	sylabaries and alphabets. The Japanese developed a couple systems
(<strong>Hiragana</strong>, <strong>Katakana</strong>) to supplement Chinese characters, the early 20th century Chinese republicans developed the <strong>Bopomofo</strong> alphabet, later 20th century Communists of China and the Singaporeans 
independently tried to simplify traditional characters with a 'simplified' ideogragh, the Koreans developed a syllabary known as <strong>Hangul Jamo</strong>, 
and the Vietnamese adopted the Latin alphabet from Portuguese and French Jesuit missionaries.   
<p>Some other interesting scripts include <strong>Ethiopic</strong>, a rare case of an abugida developed independently of the Brahmic scripts in Ethiopia around the 4th century A.D.,
 the <strong>Mongolian</strong> alphabet
	invented around 1200 by a Uyghur scribe captured by the Mongols.
	<strong>Thaana</strong>, an abjad developed mysteriously in the 18th century on the Maldives, the <strong>Cherokee</strong> script invented by Sequoyah, a Cherokee blacksmith in the 1820s, 
	the <strong>Cree</strong> syllabics developed by a missionary in the 1830s 
	and inspired by Sequoyah, and <strong>N'ko</strong>, an alphabet developed by Solomana Kante, a Guinean writer, in 1949 for Mande languages of west Africa.


</div>
