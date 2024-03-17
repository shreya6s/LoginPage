
function fun() { 
    const dictionary = {
        "Amiable": "Having or displaying a friendly and pleasant manner.",
        "Benevolent": "Well-meaning and kindly.",
        "Capitulate": "To cease resisting; surrender.",
        "Debilitate": "To make someone or something weak.",
        "Ephemeral": "Lasting for a very short time.",
        "Furtive": "Attempting to avoid notice or attention.",
        "Garrulous": "Excessively talkative, especially on trivial matters.",
        "Hapless": "Unlucky or unfortunate.",
        "Iconoclast": "A person who attacks or criticizes cherished beliefs or institutions.",
        "Juxtapose": "To place or deal with close together for contrasting effect.",
        "Kaleidoscope": "A constantly changing pattern or sequence of elements.",
        "Languid": "Lacking in vigor or vitality; sluggish.",
        "Mellifluous": "Sweet-sounding or harmonious.",
        "Nefarious": "Wicked, villainous, or criminal.",
        "Obfuscate": "To deliberately make something unclear or difficult to understand.",
        "Pernicious": "Having a harmful effect, especially in a gradual or subtle way.",
        "Quixotic": "Extremely idealistic; unrealistic and impractical.",
        "Reticent": "Inclined to keep one's thoughts, feelings, and personal affairs private.",
        "Serendipity": "The occurrence and development of events by chance in a happy or beneficial way.",
        "Ubiquitous": "Present, appearing, or found everywhere.",
        "Voracious": "Wanting or devouring great quantities of food; having a very eager approach to a particular activity.",
        "Whimsical": "Playfully quaint or fanciful, especially in an appealing and amusing way.",
        "Xenophobia": "Dislike of or prejudice against people from other countries.",
        "Yearn": "To have a strong desire or longing for something.",
        "Zephyr": "A soft, gentle breeze.",
        "Aplomb": "Self-confidence or assurance, especially when in a demanding situation.",
        "Belligerent": "Hostile and aggressive.",
        "Cacophony": "A harsh, discordant mixture of sounds.",
        "Diligent": "Showing care and conscientiousness in one's work or duties.",
        "Eloquent": "Fluent or persuasive in speaking or writing.",
        "Facetious": "Treating serious issues with deliberately inappropriate humor; flippant.",
        "Gregarious": "Fond of company; sociable.",
        "Harangue": "A lengthy and aggressive speech.",
        "Ineffable": "Too great or extreme to be expressed or described in words.",
        "Jubilant": "Feeling or expressing great joy and triumph.",
        "Kowtow": "To act in an excessively subservient manner; to show excessive deference.",
        "Luminous": "Full of or shedding light; bright or shining, especially in the dark.",
        "Munificent": "More generous than is usual or necessary.",
        "Nebulous": "In the form of a cloud or haze; hazy.",
        "Omnipotent": "Having unlimited power; able to do anything.",
        "Pervasive": "Spreading widely throughout an area or a group of people.",
        "Quagmire": "A soft, boggy area of land that gives way underfoot; a complex or difficult situation.",
        "Resilient": "Able to withstand or recover quickly from difficult conditions.",
        "Sycophant": "A person who acts obsequiously towards someone important in order to gain advantage.",
        "Trepidation": "A feeling of fear or agitation about something that may happen.",
        "Ubiquity": "The state of being widespread or ever-present.",
        "Vorfreude": "The joyful, intense anticipation that comes from imagining future pleasures.",
        "Wanderlust": "A strong desire to travel and explore the world.",
        "Xanadu": "An idyllic, beautiful place.",
        "Yonder": "At some distance in the direction indicated; over there.",
        "Zenith": "The time at which something is most powerful or successful.",
    };
  
    const texts = document.getElementById("texts");
    texts.classList.add("pop");

       console.log(dictionary["Yonder"]);
        const keys = Object.keys(dictionary);
        const randomKey = keys[Math.floor(Math.random() * keys.length)];
        const randomValue = dictionary[randomKey];
        document.getElementById("word").innerHTML = randomKey; 
        document.getElementById("meaning").innerHTML = randomValue; 
    
 } 