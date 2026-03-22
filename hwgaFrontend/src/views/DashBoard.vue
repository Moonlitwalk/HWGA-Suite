<script setup>
// Static example data for now.
// Later you can replace this with API calls, for example:
// onMounted(() => fetchDashboardData())
import guildLogo from '@/assets/guildLogo.png'
</script>
<template>
  <div class="app-shell dashboard-page">
    <!-- Top Header -->
    <section class="panel panel--featured dashboard-hero">
      <div class="dashboard-hero__content">
        <div class="dashboard-hero__left">
          <p class="dashboard-kicker">Guild Mythic+ Command Board</p>
          <h1 class="panel-title dashboard-title">Here We Go Again</h1>
          <p class="dashboard-subtitle">
            Track your roster, best keys, weekly progress, and dungeon performance.
          </p>

          <div class="dashboard-badges">
            <span class="badge badge--gold">Season 2</span>
            <span class="badge badge--jade">Active Guild Roster</span>
          </div>

          <div class="dashboard-actions">
            <button class="btn btn-primary">Add New Run</button>
            <button class="btn btn-secondary">View Leaderboard</button>
          </div>
        </div>

        <div class="dashboard-hero__logo">
          <img :src="guildLogo" alt="Here We Go Again Guild Crest" class="guild-logo" />
        </div>
      </div>
    </section>

    <!-- KPI Cards -->
    <section class="dashboard-grid dashboard-grid--kpis">
      <div class="kpi-card">
        <p class="kpi-card__label">Guild Score</p>
        <h2 class="kpi-card__value">3248</h2>
        <p class="subtle-text">Average active roster performance</p>
      </div>

      <div class="kpi-card">
        <p class="kpi-card__label">Best Key</p>
        <h2 class="kpi-card__value">+16</h2>
        <p class="subtle-text">Theater of Pain</p>
      </div>

      <div class="kpi-card">
        <p class="kpi-card__label">Timed Runs This Week</p>
        <h2 class="kpi-card__value">18</h2>
        <p class="subtle-text">Strong weekly momentum</p>
      </div>

      <div class="kpi-card">
        <p class="kpi-card__label">Active Members</p>
        <h2 class="kpi-card__value">12</h2>
        <p class="subtle-text">Roster participating this reset</p>
      </div>
    </section>

    <!-- Main Content Grid -->
    <section class="dashboard-grid dashboard-grid--main">
      <!-- Left Column -->
      <div class="dashboard-column">
        <!-- Weekly Progress -->
        <div class="panel">
          <h2 class="panel-title">Weekly Guild Progress</h2>
          <div class="divider-gold"></div>

          <div class="progress-row">
            <div class="progress-row__top">
              <span>Timed Keys Goal</span>
              <span>18 / 25</span>
            </div>
            <div class="progress">
              <div class="progress__bar" style="width: 72%"></div>
            </div>
          </div>

          <div class="progress-row">
            <div class="progress-row__top">
              <span>Vault Completion Goal</span>
              <span>9 / 12</span>
            </div>
            <div class="progress">
              <div class="progress__bar" style="width: 75%"></div>
            </div>
          </div>

          <div class="progress-row">
            <div class="progress-row__top">
              <span>Guild Push Nights</span>
              <span>2 / 3</span>
            </div>
            <div class="progress">
              <div class="progress__bar" style="width: 66%"></div>
            </div>
          </div>
        </div>

        <!-- Recent Runs -->
        <div class="panel">
          <h2 class="panel-title">Recent Runs</h2>
          <div class="divider-gold"></div>

          <div class="runs-list">
            <div class="run-item">
              <div>
                <h3 class="run-item__title">Theater of Pain +16</h3>
                <p class="subtle-text">Timed • 31:42 • Fortified / Sanguine</p>
              </div>
              <span class="badge badge--jade">+2 Chest</span>
            </div>

            <div class="run-item">
              <div>
                <h3 class="run-item__title">Ara-Kara +14</h3>
                <p class="subtle-text">Timed • 28:05 • Tyrannical / Bursting</p>
              </div>
              <span class="badge badge--gold">Best Run</span>
            </div>

            <div class="run-item">
              <div>
                <h3 class="run-item__title">City of Threads +15</h3>
                <p class="subtle-text">Depleted • 36:14 • Fortified / Spiteful</p>
              </div>
              <span class="badge badge--danger">Depleted</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column -->
      <div class="dashboard-column">
        <!--TODO: smaller to fit more people-->
        <!-- Top Players -->
        <div class="panel">
          <h2 class="panel-title">Top Roster</h2>
          <div class="divider-gold"></div>

          <div class="roster-list">
            <div class="roster-item">
              <div>
                <h3 class="roster-item__name">Moonlitwalk</h3>
                <p class="subtle-text">Brewmaster Monk</p>
              </div>
              <span class="badge badge--gold">3412</span>
            </div>

            <div class="roster-item">
              <div>
                <h3 class="roster-item__name">Aelrith</h3>
                <p class="subtle-text">Restoration Druid</p>
              </div>
              <span class="badge badge--jade">3320</span>
            </div>

            <div class="roster-item">
              <div>
                <h3 class="roster-item__name">Kaevor</h3>
                <p class="subtle-text">Frost Mage</p>
              </div>
              <span class="badge badge--jade">3278</span>
            </div>

            <div class="roster-item">
              <div>
                <h3 class="roster-item__name">Draeth</h3>
                <p class="subtle-text">Retribution Paladin</p>
              </div>
              <span class="badge badge--jade">3214</span>
            </div>
          </div>
        </div>

        <!-- Guild Notes -->
        <div class="panel">
          <h2 class="panel-title">Guild Notes</h2>
          <div class="divider-gold"></div>

          <ul class="notes-list">
            <li>Push night starts Friday 20:00 server time.</li>
            <li>Focus this week: cleaner defensive usage on tyrannical bosses.</li>
            <li>Need one backup ranged DPS for organized +15 keys.</li>
            <li>Log all completed runs for better performance tracking.</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Leaderboard Table -->
    <section class="panel">
      <h2 class="panel-title">Guild Leaderboard</h2>
      <div class="divider-gold"></div>

      <div class="table-wrap">
        <table>
          <thead>
            <tr>
              <th>Rank</th>
              <th>Player</th>
              <th>Class</th>
              <th>Role</th>
              <th>Score</th>
              <th>Best Key</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>#1</td>
              <td>Moonlitwalk</td>
              <td>Monk</td>
              <td>Tank</td>
              <td>3412</td>
              <td>+16</td>
            </tr>
            <tr>
              <td>#2</td>
              <td>Aelrith</td>
              <td>Druid</td>
              <td>Healer</td>
              <td>3320</td>
              <td>+15</td>
            </tr>
            <tr>
              <td>#3</td>
              <td>Kaevor</td>
              <td>Mage</td>
              <td>DPS</td>
              <td>3278</td>
              <td>+15</td>
            </tr>
            <tr>
              <td>#4</td>
              <td>Draeth</td>
              <td>Paladin</td>
              <td>DPS</td>
              <td>3214</td>
              <td>+14</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </div>
</template>

<style scoped>
.dashboard-page {
  display: flex;
  flex-direction: column;
  gap: 24px;
}

.dashboard-hero {
  overflow: hidden;
  position: relative;
}

.dashboard-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(circle at top right, rgba(31, 184, 154, 0.1), transparent 30%),
    radial-gradient(circle at bottom left, rgba(212, 175, 55, 0.08), transparent 28%);
  pointer-events: none;
}

.dashboard-hero__content {
  position: relative;
  z-index: 1;
  display: flex;
  justify-content: space-between;
  gap: 40px;
  align-items: center;
  flex-wrap: wrap;
}

.dashboard-hero__left {
  flex: 1;
  min-width: 320px;
}

.dashboard-hero__logo {
  flex-shrink: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
}

.dashboard-hero__logo::before {
  content: '';
  position: absolute;
  width: 260px;
  height: 260px;
  background: radial-gradient(
    circle,
    rgba(31, 184, 154, 0.22),
    rgba(212, 175, 55, 0.12),
    transparent 70%
  );
  filter: blur(45px);
  z-index: -1;
}

.guild-logo {
  width: 220px;
  max-width: 28vw;
  min-width: 140px;
  height: auto;
  opacity: 0.96;
  filter: drop-shadow(0 10px 25px rgba(0, 0, 0, 0.6)) drop-shadow(0 0 12px rgba(212, 175, 55, 0.2));
  transition: transform 0.25s ease;
}

.guild-logo:hover {
  transform: scale(1.03);
}

.dashboard-kicker {
  margin: 0 0 8px;
  color: var(--gold-soft);
  font-size: 0.95rem;
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

.dashboard-title {
  font-size: clamp(2rem, 4vw, 3.5rem);
  margin-bottom: 10px;
}

.dashboard-subtitle {
  max-width: 700px;
  margin: 0;
  color: var(--text-soft);
  line-height: 1.6;
}

.dashboard-badges {
  display: flex;
  gap: 10px;
  flex-wrap: wrap;
  margin-top: 16px;
}

.dashboard-actions {
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
  margin-top: 18px;
}

.dashboard-grid {
  display: grid;
  gap: 20px;
}

.dashboard-grid--kpis {
  grid-template-columns: repeat(4, 1fr);
}

.dashboard-grid--main {
  grid-template-columns: 1.4fr 1fr;
  align-items: start;
}

.dashboard-column {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.progress-row {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.progress-row + .progress-row {
  margin-top: 18px;
}

.progress-row__top {
  display: flex;
  justify-content: space-between;
  gap: 12px;
  color: var(--text-soft);
  font-size: 0.95rem;
}

.runs-list,
.roster-list {
  display: flex;
  flex-direction: column;
  gap: 14px;
}

.run-item,
.roster-item {
  display: flex;
  justify-content: space-between;
  gap: 16px;
  align-items: center;
  padding: 14px 16px;
  border-radius: var(--radius-md);
  background: rgba(255, 255, 255, 0.02);
  border: 1px solid rgba(231, 217, 168, 0.06);
}

.run-item__title,
.roster-item__name {
  margin: 0 0 4px;
  font-size: 1rem;
  color: var(--parchment);
}

.notes-list {
  margin: 0;
  padding-left: 18px;
  color: var(--text-soft);
  line-height: 1.7;
}

.notes-list li + li {
  margin-top: 8px;
}

@media (max-width: 1100px) {
  .dashboard-grid--kpis {
    grid-template-columns: repeat(2, 1fr);
  }

  .dashboard-grid--main {
    grid-template-columns: 1fr;
  }
}

@media (max-width: 900px) {
  .dashboard-hero__content {
    flex-direction: column;
    align-items: flex-start;
  }

  .dashboard-hero__logo {
    align-self: center;
  }

  .guild-logo {
    width: 180px;
    max-width: 50vw;
  }
}

@media (max-width: 700px) {
  .dashboard-grid--kpis {
    grid-template-columns: 1fr;
  }

  .dashboard-actions {
    width: 100%;
  }

  .dashboard-actions .btn {
    width: 100%;
  }
}
</style>
