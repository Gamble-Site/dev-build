function randomGame() {
    var result = Math.floor(Math.random() * 6);
    var games = ["tower", "crash", "slots", "roulette", "blackjack", "spin"];
    for (i = 0; i < games.length; i++) {
        if (games[i] = games[result]) {
            url = "games/" + games[result] + ".php";
            location.replace(url);
        }
    }
}