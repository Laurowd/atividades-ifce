// Dados iniciais dos perfis
const usersData = [
    {
        id: 1,
        name: "Lauro Oliveira",
        job: "Desenvolvedor Front-end",
        bio: "Apaixonado por criar interfaces bonitas e interativas. Amante de café.",
        skills: ["HTML", "CSS", "JavaScript", "React"],
        followers: 1205,
        following: 450,
        avatar: "https://i.pravatar.cc/150?img=11",
        isFollowing: false
    },
    {
        id: 2,
        name: "Ana Costa",
        job: "UX/UI Designer",
        bio: "Transformando problemas complexos em designs simples e intuitivos.",
        skills: ["Figma", "UI Design", "Pesquisa UX"],
        followers: 3400,
        following: 200,
        avatar: "https://i.pravatar.cc/150?img=5",
        isFollowing: true
    },
    {
        id: 3,
        name: "Carlos Mendes",
        job: "Engenheiro de Software",
        bio: "Focado em performance e arquitetura escalável. Entusiasta de Open Source.",
        skills: ["Node.js", "Python", "Docker", "AWS"],
        followers: 890,
        following: 1100,
        avatar: "https://i.pravatar.cc/150?img=12",
        isFollowing: false
    },
    {
        id: 4,
        name: "Beatriz Lima",
        job: "Cientista de Dados",
        bio: "Explorando o mundo através de dados e machine learning.",
        skills: ["Python", "Pandas", "TensorFlow", "SQL"],
        followers: 2150,
        following: 320,
        avatar: "https://i.pravatar.cc/150?img=47",
        isFollowing: false
    },
    {
        id: 5,
        name: "Rafael Silva",
        job: "Desenvolvedor Mobile",
        bio: "Criando experiências incríveis para iOS e Android.",
        skills: ["Flutter", "Dart", "Swift", "Kotlin"],
        followers: 1540,
        following: 890,
        avatar: "https://i.pravatar.cc/150?img=33",
        isFollowing: true
    },
    {
        id: 6,
        name: "Juliana Santos",
        job: "Product Manager",
        bio: "Conectando visões de negócios com execuções técnicas.",
        skills: ["Agile", "Scrum", "Estratégia", "Jira"],
        followers: 4200,
        following: 500,
        avatar: "https://i.pravatar.cc/150?img=20",
        isFollowing: false
    }
];

// Tema da Página (Claro/Escuro)
const themeToggleBtn = document.getElementById('theme-toggle');
const colorToggleBtn = document.getElementById('color-toggle');
const body = document.body;

themeToggleBtn.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    body.classList.toggle('light-mode');
    
    if (body.classList.contains('dark-mode')) {
        themeToggleBtn.innerHTML = '<span class="icon">☀️</span> Modo Claro';
    } else {
        themeToggleBtn.innerHTML = '<span class="icon">🌙</span> Modo Escuro';
    }
});

// Cor Global dos Cards
let cardColorThemeIndex = 1;

colorToggleBtn.addEventListener('click', () => {
    cardColorThemeIndex = cardColorThemeIndex >= 3 ? 1 : cardColorThemeIndex + 1;
    
    body.classList.remove('cards-theme-1', 'cards-theme-2', 'cards-theme-3');
    body.classList.add(`cards-theme-${cardColorThemeIndex}`);
});

// Container principal
const cardsContainer = document.getElementById('cards-container');
const backdrop = document.getElementById('backdrop');

// Função para renderizar os cards
function renderCards() {
    cardsContainer.innerHTML = '';
    
    usersData.forEach((user, index) => {
        const card = document.createElement('div');
        card.className = 'profile-card';
        card.id = `card-${user.id}`;
        
        // Estrutura do Card
        card.innerHTML = `
            <button class="close-focused-btn" onclick="event.stopPropagation(); closeCard()">×</button>
            <div class="avatar-container">
                <img src="${user.avatar}" alt="Avatar do ${user.name}" class="avatar" id="avatar-${user.id}">
                <button class="change-avatar-btn" onclick="event.stopPropagation(); triggerFileInput(${user.id})" title="Fazer Upload de Foto">
                    📷
                </button>
                <input type="file" id="file-input-${user.id}" class="hidden-file-input" accept="image/*" onchange="handleFileUpload(event, ${user.id})">
            </div>
            
            <h2 class="name">${user.name}</h2>
            <h3 class="job">${user.job}</h3>
            
            <p class="bio">${user.bio}</p>
            
            <div class="skills">
                ${user.skills.map(skill => `<span class="skill-tag">${skill}</span>`).join('')}
            </div>
            
            <div class="stats">
                <div class="stat-item">
                    <span class="stat-value" id="followers-${user.id}">${formatNumber(user.followers)}</span>
                    <span class="stat-label">Seguidores</span>
                </div>
                <div class="stat-item">
                    <span class="stat-value">${formatNumber(user.following)}</span>
                    <span class="stat-label">Seguindo</span>
                </div>
            </div>
            
            <div class="card-actions">
                <button 
                    class="btn btn-follow ${user.isFollowing ? 'following' : ''}" 
                    id="btn-follow-${user.id}"
                    onclick="event.stopPropagation(); toggleFollow(${index})">
                    ${user.isFollowing ? '✓ Seguindo' : '+ Seguir'}
                </button>
            </div>
        `;

        // Interação de Clicar no Card para Centralizar
        card.addEventListener('click', () => {
            focusCard(card.id);
        });

        cardsContainer.appendChild(card);
    });
}

// Funcionalidade: Acionar o input file oculto para upload de imagem
function triggerFileInput(userId) {
    const fileInput = document.getElementById(`file-input-${userId}`);
    fileInput.click();
}

// Funcionalidade: Lidar com o arquivo de imagem selecionado pelo usuário do computador
function handleFileUpload(event, userId) {
    const file = event.target.files[0];
    if (file) {
        // Cria uma URL temporária do arquivo selecionado que o navegador possa ler
        const imageUrl = URL.createObjectURL(file);
        
        // Atualiza a imagem no DOM
        const avatarEl = document.getElementById(`avatar-${userId}`);
        
        // Pequena animação
        avatarEl.style.opacity = '0';
        setTimeout(() => {
            avatarEl.src = imageUrl;
            avatarEl.style.opacity = '1';
        }, 200);
        
        // Atualiza nos dados do usuário localmente
        const user = usersData.find(u => u.id === userId);
        if (user) {
            user.avatar = imageUrl;
        }
    }
}

// Funcionalidade: Seguir / Deixar de Seguir
function toggleFollow(index) {
    const user = usersData[index];
    
    if (user.isFollowing) {
        user.followers -= 1;
        user.isFollowing = false;
    } else {
        user.followers += 1;
        user.isFollowing = true;
    }
    
    // Atualizar apenas os elementos afetados
    const followBtn = document.getElementById(`btn-follow-${user.id}`);
    const followersEl = document.getElementById(`followers-${user.id}`);
    
    if (user.isFollowing) {
        followBtn.classList.add('following');
        followBtn.innerHTML = '✓ Seguindo';
    } else {
        followBtn.classList.remove('following');
        followBtn.innerHTML = '+ Seguir';
    }
    
    followersEl.innerText = formatNumber(user.followers);
}

// Funcionalidade: Centralizar Card
let currentFocusedCardId = null;

function focusCard(cardId) {
    const card = document.getElementById(cardId);
    if (!card || card.classList.contains('focused')) return;
    
    card.classList.add('focused');
    backdrop.classList.remove('hidden');
    currentFocusedCardId = cardId;
    
    // Impedir rolagem da página
    document.body.style.overflow = 'hidden';
}

function closeCard() {
    if (currentFocusedCardId) {
        const card = document.getElementById(currentFocusedCardId);
        if (card) {
            card.classList.remove('focused');
        }
        backdrop.classList.add('hidden');
        currentFocusedCardId = null;
        
        // Restaurar rolagem da página
        document.body.style.overflow = '';
    }
}

// Fechar card ao clicar no backdrop
backdrop.addEventListener('click', closeCard);

// Utilitário para formatar números longos (K)
function formatNumber(num) {
    if (num >= 1000) {
        return (num / 1000).toFixed(1) + 'k';
    }
    return num;
}

// Inicializar aplicação
renderCards();
