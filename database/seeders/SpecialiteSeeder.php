<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\Specialite;

class SpecialiteSeeder extends Seeder
{
    public function run(): void
    {
        $specialites = [
            [
                'nom' => 'Médecine Générale',
                'code' => 'MG',
                'tarif_base' => 10000,
                'description' => 'Consultation générale pour tous types de pathologies',
                'icone' => '🩺',
            ],
            [
                'nom' => 'Cardiologie',
                'code' => 'CARDIO',
                'tarif_base' => 20000,
                'description' => 'Spécialiste des maladies du cœur et des vaisseaux',
                'icone' => '❤️',
            ],
            [
                'nom' => 'Pédiatrie',
                'code' => 'PED',
                'tarif_base' => 15000,
                'description' => 'Soins médicaux pour les enfants et adolescents',
                'icone' => '👶',
            ],
            [
                'nom' => 'Dermatologie',
                'code' => 'DERM',
                'tarif_base' => 18000,
                'description' => 'Traitement des maladies de la peau',
                'icone' => '🔬',
            ],
            [
                'nom' => 'Gynécologie',
                'code' => 'GYNO',
                'tarif_base' => 17000,
                'description' => 'Santé de la femme et suivi de grossesse',
                'icone' => '👩‍⚕️',
            ],
        ];

        foreach ($specialites as $specialite) {
            Specialite::create($specialite);
        }
    }
}

