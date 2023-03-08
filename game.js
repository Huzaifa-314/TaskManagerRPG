window.addEventListener('load', () => {
  let playerHealth = 100;
  let enemyHealth = 100;
  
  const playerHealthBar = document.getElementById("player-health");
  const enemyHealthBar = document.getElementById("enemy-health");
  const defendButton = document.getElementById("defend-button");
  const attackButton = document.getElementById("attack-button");
  
  function updateHealthBars() {
    playerHealthBar.style.width = playerHealth + "%";
    enemyHealthBar.style.width = enemyHealth + "%";
  }
  
  function defend() {
    const damage = Math.floor(Math.random() * 10) + 1;
    enemyHealth -= damage;
    updateHealthBars();
    alert("You dealt " + damage + " damage to your opponent by defending!");
    if (enemyHealth <= 0) {
      alert("You win!");
      reset();
    } else {
      enemyAttack();
    }
  }
  
  function attack() {
    const damage = Math.floor(Math.random() * 20) + 1;
    enemyHealth -= damage;
    updateHealthBars();
    alert("You dealt " + damage + " damage to your opponent!");
    if (enemyHealth <= 0) {
      alert("You win!");
      reset();
    } else {
      enemyAttack();
    }
  }
  
  function enemyAttack() {
    const damage = Math.floor(Math.random() * 15) + 1;
    playerHealth -= damage;
    updateHealthBars();
    alert("Enemy attacked and did " + damage + " damage!");
    if (playerHealth <= 0) {
      alert("You lose!");
      reset();
    }
  }
  
  function reset() {
    playerHealth = 100;
    enemyHealth = 100;
    updateHealthBars();
  }
  
  defendButton.addEventListener("click", defend);
  attackButton.addEventListener("click", attack);
});

