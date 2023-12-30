<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>जवळपासची ठिकाणे</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    #places-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      padding: 20px;
    }

    .place-card {
      width: 300px;
      margin: 20px;
      padding: 15px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .place-image {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 10px;
    }

    .place-name {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
      cursor: pointer;
      color: #333;
      text-decoration: none;
    }

    .place-name:hover {
      color: #e96b56; /* Change the color on hover */
    }

    .place-description {
      font-size: 14px;
      color: #555;
    }
  </style>
</head>
<body>

<div id="places-container"></div>

<script>
  // Sample data (replace this with dynamic data from your API)
  const placesData = [
    {
      name: "महादेव दारा (बीड सांगवी)",
      image: "https://lh5.googleusercontent.com/p/AF1QipOQCAZRoz4rR1f4wkfFlLE8QFWoW8XVs_5F45BZ=w408-h306-k-no",
      description: "महादेव दरा हे साइट पाहण्यासाठी चांगले ठिकाण आहे. एकदा तुम्ही या ठिकाणी भेट दिली तर तुम्हाला हे आयुष्यभर लक्षात राहील. येथे वास्तविक नैसर्गिक जंगल आहे आणि तुम्ही भेट दिल्यास तुम्हाला मिळेल",
      link: "https://maps.app.goo.gl/fqQiWPWScAdTReBy6"
    },
    {
      name: "मोहटादेवीचे मंदिर",
      image: "https://lh5.googleusercontent.com/p/AF1QipNl8I42Ivbs-tSAP3mRQVKqjczhwewPKhlKXB5-=w426-h240-k-no",
      description:"मोहटादेवीचे मंदिर हे महाराष्ट्रातील अहमदनगर जिल्ह्यातील पाथर्डी तालुक्यातील एक देवीचे देऊळ आहे.. हे मंदिर हे महाराष्ट्रातील देवींच्या मोठ्या मंदिरांपैकी एक आहे.",
      link: "https://maps.app.goo.gl/doWF6dw3Xznq19pM6"
    },
    {
      name: "श्री जगदंबा देवी देवस्थान ट्रस्ट, धामणगांव",
      image: "images/dhamangaon.jpeg",
      description: "धामनगावची देवी ही पाथर्डी तालुक्यापासुन 6 कि.मी आतंरावर आहे. ह्या देवीच्या मंदिराबाहेर बारव आहे येथे आपन हातपाय धुतल्यानी आपले त्वचा रोग बरे होतात.",
      link: "https://maps.app.goo.gl/MjhnMj8E7tLTk1MV6"
    },
    {
      name: "कानिफनाथ समाधी स्थळ मढी",
      image:"http://kanifnathsamadhimandirmadhi.com/assets/img/Portfolio/small/24.jpg",
      description: "गर्भगिरीच्या पर्वतावर घाटशिरस नजीक एका दरीमध्ये श्री आदिनाथ हे वृद्धेश्वराच्या रूपाने वास्तव्य करीत आहे. वृद्धेश्वराच्या पुर्वेकडे ५ कि.मी. अंतरावर सावरगाव नजीक श्री मच्छिंद्रनाथाच्या उत्तरेस ५ कि.मी. अंतरावर मढी या गावामध्ये एका टेकडीवर कानिफनाथ हे विराजमान झाले आहे. श्री नऊनारायणांनी श्रीकृष्णाच्या आदेशाने वेगवेगळ्या नाथांच्या रूपाने अवतार घेतले. त्याचप्रमाणे श्री प्रबुद्ध नारायणांनी हिमालयातील एका हत्तीच्या कानामध्ये जन्म घेतला, म्हणून त्यांना कानिफनाथ हे नाव पडले. ",
      link: "https://maps.app.goo.gl/UWxBX8iJpmgatLxN7"
    },
    {
      name: "जोगेश्वरी मंदिर,पारगाव",
      image: "https://images.bhaskarassets.com/webp/thumb/512x0/web2images/5483/2022/10/02/orig_new-project-4_1664732952.jpg",
      description: "पारगाव (जोगेश्वरी) हे गाव, आष्टीच्या दक्षिणेस आष्टी खडकत मार्गावरील पारगाव फाट्यापासून 2 कि.मी. आहे. आष्टी ते पारगाव फाटा 9 कि.मी. खडकत ते पारगाव फाटा 9 कि.मी. शिराळा ते पारगाव फाटा 16 कि.मी. शिराळ्याहून पारगाव पायमार्गे (हणमंतगाव, टाकळसिंग मार्गे) 10 कि.मी. आहे. पारगावला जाण्यासाठी एस. टी. बस सेवा उपलब्ध आहे.",
      link: "https://maps.app.goo.gl/n6ckJzhaPZQNPw1n9"
    },
    {
        name: "रामेश्वर/सौताडा ",
        image: "images/sautada.jpeg",
      description: "सौताडा हे स्थळ पाटोदा तालुक्यात असून येथील विंचरणा नदीवरील धबधबा प्रसिद्ध आहे. पाटोदा तालुक्यातील डोंगराळ परिसरात उगम पावणारी विंचरणा नदी वाहत जाऊन पुढे सौताडा येथे विंचरणेचा प्रवाह सुमारे सत्तर मीटर उंचीवरून दरीत कोसळतो. येथील धबधबा प्रसिद्ध आहे. येथे दरीत भगवान राम आणि सीता यांनी महादेवाचे एक मंदिर बनवले आहे. या मंदिरास रामेश्वर म्हणून ओळखले जाते हे बीड वण विभागाच्या ताब्यात आहे",
      link: ""
    },
    {
        name: "श्रीक्षेत्र भगवानगड",
        image: "images/bhagawangadh.jpeg",
        description: "श्रीक्षेत्र”भगवानगड” हे महाराष्ट्र राज्यातील बीड-अहमदनगर जिल्ह्यांतील, सीमेवर असलेल्या, अहमदनगर जिल्ह्यातील पाथर्डी तालुक्यातील खरवंडी गावाच्या बाजूला डोंगरावर वसलेले निसर्गरम्य देवस्थान आहे. या निसर्गरम्य देवस्थानलगतच राष्ट्रीय महामार्ग कल्याण ते विशाखापटणम हा जातो.",
        link: "https://maps.app.goo.gl/PndSrdX1EeiN7onm7"
    },
    {
      name: "हनुमान गड ",
      image: "https://lh5.googleusercontent.com/p/AF1QipMv7zMQ0c5m3i4vzS66pp9RvewabEcjguUfim6Z=w408-h544-k-no",
      description: "",
      link: "https://maps.app.goo.gl/q3h4rTeFpjymYWCv8"
    }
    // Add more places as needed
];

// Function to create a place card
function createPlaceCard(place) {
    const placeCard = document.createElement("div");
    placeCard.classList.add("place-card");

    const placeImage = document.createElement("img");
    placeImage.classList.add("place-image");
    placeImage.src = place.image;
    placeImage.alt = place.name;

    const placeName = document.createElement("a");
    placeName.classList.add("place-name");
    placeName.textContent = place.name;
    placeName.href = place.link;

    const placeDescription = document.createElement("div");
    placeDescription.classList.add("place-description");
    placeDescription.textContent = place.description;

    placeCard.appendChild(placeImage);
    placeCard.appendChild(placeName);
    placeCard.appendChild(placeDescription);

    return placeCard;
  }

  // Function to display places on the webpage
  function displayPlaces() {
    const placesContainer = document.getElementById("places-container");

    placesData.forEach((place) => {
      const placeCard = createPlaceCard(place);
      placesContainer.appendChild(placeCard);
    });
  }

  // Display places when the page loads
  displayPlaces();
</script>

</body>
</html>

<?php include("footer.php");?>