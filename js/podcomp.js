const data = [
  {
    urlPodCast: 'https://open.spotify.com/embed-podcast/episode/7bWnBBXJ6i0STlHb4QYevH',
    descricao: 'Faala, Galera!! Vamos apresentar nosso novo projeto de PodCast, o PodComp... Eai, está interessado em saber quem somos nós? Vem com a gente.',
    isBlue: true,
    hosts: ['Carlos Silva', ' Natasha Araújo']
  },
  {
    urlPodCast: 'https://open.spotify.com/embed/episode/3XyvcJjWLTAE7KintWJ1Ep',
    descricao: 'Comunicação, Trabalho em equipe, falar em público... O quê? Não sabe o que é Soft Skill? Corre e vem saber com a gente.',
    isBlue: true,
    hosts: ['Carlos Silva', ' Natasha Araújo', ' Alana Araújo']
  },
  {
    urlPodCast: 'https://open.spotify.com/embed/episode/3bGiWmYFeTubKzABAm9P2N',
    descricao: 'Depois de entender o que é Soft Skill e quais são algumas das principais, chegou a hora de colocar a mão na massa. Partiu?',
    isBlue: true,
    hosts: ['Carlos Silva', ' Natasha Araújo']
  },
  // {
  //   urlPodCast: 'https://open.spotify.com/embed/episode/2X9INwrLSsSI1sUUF9fyg9?theme=0',
  //   descricao: 'Hoje é dia de Pop Culture!! Nesse episódio falamos sobre o filme O Jogo da Imitação. Já assistiu? Ainda não? Não perde tempo e vem descobrir mais sobre ele aqui com a gente.',
  //   isBlue: false,
  //   hosts: ['Carlos Silva', ' Natasha Araújo', ' Maykon Keslley']
  // },
  {
    urlPodCast: 'https://open.spotify.com/embed/episode/4QtX69HqDoeO5IivXneRJR',
    descricao: 'Está difícil, né? Nesse episódio falamos sobre a dificuldade de mantermos a sanidade em meio a pandemia e a importância do lazer para lidar com todos esses problemas. Vamos bater um papo?',
    isBlue: true,
    hosts: ['Carlos Silva', ' Natasha Araújo']
  },
  {
    urlPodCast: 'https://open.spotify.com/embed/episode/2nn9D7D6vxI4Y7PvPv1raR',
    descricao: 'Já se perguntou se o que você faz pode ser totalmente substituído por uma máquina? Nesse episódio falamos sobre a preocupação da troca da mão de obra humana pela máquina, além de citarmos alguns empregos que têm riscos de serem substituídos pela tecnologia e alguns empregos do futuro. Ficou interessado? Vem conversar com a gente.',
    isBlue: true,
    hosts: ['Carlos Silva', ' Natasha Araújo']
  },
  {
    urlPodCast: 'https://open.spotify.com/embed/episode/2qjxoiUNEtDyLtDATpuKgK',
    descricao: 'Eai, tá difícil ler com sua cama aí do lado? Nesse episódio falamos um pouco sobre a leitura. Falamos sobre alguns dados interessantes no Brasil, algumas dicas para iniciar ou manter o hábito de leitura e também sobre o que é uma curadoria. Ficou interessado? Vem falar com a gente.',
    isBlue: true,
    hosts: ['Carlos Silva', ' Kennedy Anderson']
  },
  {
    urlPodCast: 'https://open.spotify.com/embed/episode/6gPbsFde3WRP2loEBhN2Q5',
    descricao: 'Ohaiooo!! Você certamente já assistiu ou já ouviu falar sobre essa mídia tão popular no mundo todo, o Anime. Vem conhecer e saber alguns animes que falam sobre Tecnologia e Ciência com a gente!',
    isBlue: true,
    hosts: ['Carlos Silva', ' Kennedy Anderson', ' André Filipe']
  },
  {
    urlPodCast: 'https://open.spotify.com/embed/episode/0hVJqeAXKzyAjfBC9x02Ul',
    descricao: 'Bem vindos, Calouros!! Estamos muitos felizes que vocês vão fazer parte da família ufmista. Nesse episódio você irá saber mais sobre alguns prédios do Campus Bacanga, algumas dicas, experiências e mais. Ficou curioso? Vem com a gente...',
    isBlue: true,
    hosts: ['Carlos Silva', ' André Filipe']
  },
  {
    urlPodCast: 'https://open.spotify.com/embed/episode/0Ovw2X9sNC8dggp9Ht7EYM',
    descricao: 'Você já imaginou baixar sua série favorita inteira com menos de 5 minutos? Ou até baixar sua playlist de músicas preferida em segundos? Saiba que esse sonho já é quase realidade. Quer saber por quê? Vem conversar um pouco com a gente.',
    isBlue: true,
    hosts: ['Carlos Silva', ' André Filipe']
  },
  {
    urlPodCast: 'https://open.spotify.com/embed/episode/1ojUIAbpBZDtl5jDTH7zZa',
    descricao: 'Quando se está na universidade, é imprescindível que haja um contato constante com artigos científicos, pois o conhecimento gerado por pequisadores das mais variadas áreas é compilado nesse tipo de documento. Quer aprender como ler um artigo científico? Vem discutir com a gente.',
    hosts: ['Carlos Vinicius', ' André Filipe', ' Thalisson Jon']
  },
  
  {
    urlPodCast: 'https://open.spotify.com/embed/episode/3qVO8s24JVKJ3xvRkw4NkK',     descricao: 'Nesse episodio, os apresentadores Ramille Santana, Thiago Augusto e William Martins falam sobre suas experiências com o ChatGPT, desmistificam a ideia de que o mesmo irá roubar empregos e como ele pode ser usado para facilitar o aprendizado no curso.',
    hosts: ['Ramille Santana', ' Thiago Augusto', ' William Martins']
  },
  
  {
    urlPodCast: 'https://open.spotify.com/embed/episode/0F9f8Reg6bHXWGkOIsbnqb',     descricao: 'O episódio discute os desafios e tendências em cibersegurança, destacando conceitos como malware, ransomware e engenharia social. Os apresentadores compartilham experiências pessoais de ataques cibernéticos. Exploram o uso de cookies na internet, alertando sobre permissões concedidas a sites. Abordam os perigos das redes Wi-Fi públicas e oferecem dicas de proteção, como evitar acessar informações sensíveis nesses ambientes e considerar o uso de VPNs. Mencionam a pesquisa do MIT sobre defesa cibernética no Brasil e ressaltam a necessidade de conscientização e treinamento para usuários e empresas. No final, destacam medidas essenciais de segurança, como senhas fortes e autenticação de dois fatores, enfatizando a responsabilidade do usuário na proteção de suas informações.',
    hosts: ['André Ribeiro', ' Mikael Silva', 'Thiago Augusto']
  },

  {
    urlPodCast: 'https://open.spotify.com/embed/episode/758i4WcF47ZhgldSavGuf0',     descricao: 'O episódio, que conta com a participação dos petianos Breno Vidigal, Paloma Santos, Melquezedeque Costa e Thiago Augusto, oferece uma visão abrangente das diversas áreas de atuação dentro da TI, destacando as tendências do mercado de trabalho e as habilidades essenciais necessárias para o sucesso profissional.',
    hosts: ['Breno Vidigal', ' Melquezedeque Costa', 'Paloma Santos', 'Thiago Augusto']
  }

]


// JS (podcomp.js)


// 2. Montar os slides
const mostrarPodCast = data.map((item) => {
  return `
    <div class="swiper-slide">
      <div class="episodio">
        <div class="texto">
          <iframe src="${item.urlPodCast}" width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media" loading="lazy"></iframe>
          <p>${item.descricao}</p>
          <p class="hosts" style="padding: 0; color: #fff">
            <img src="./assets/svg/mic_white_24dp.svg"> ${item.hosts.join(', ')}
          </p>
        </div>
      </div>
    </div>`;
});

// 3. Inserir no DOM
document.querySelector('.episodios').innerHTML = mostrarPodCast.join('');

// 4. Só agora: iniciar o Swiper
const swiper = new Swiper('.carousel', {
  spaceBetween: 50,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    type: 'bullets',
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
});

