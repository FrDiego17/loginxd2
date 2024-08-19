<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;

class registerAdminController extends Controller {
    public function show() {
        $datos = DB::select("SELECT * FROM users Where role = 'admin' ");
        return view('admin.registerAdmin')->with("datos", $datos);
    }

    public function createAdmin(Request $request) {
        $request->validate([
            'txtpassword' => [
                'required',
                'string',
                'min:8', 
                'regex:/[a-z]/', // Tiene que tener al menos una letra minúscula
                'regex:/[A-Z]/', // Tiene que tener al menos una letra mayúscula
                'regex:/[0-9]/', 
                'regex:/[@$!%*?&]/', 
            ],
        ], [
            'txtpassword.min' => 'La Contraseña debe contener al menos 8 caracteres',
            'txtpassword.regex' => 'La contraseña debe contener al menos una letra mayúscula, una letra minúscula, un número y un símbolo especial (@$!%*?&).',
        ]);
        
        try {
            $sql = DB::insert("INSERT INTO users (id_admin, username, role, email, password) VALUES (?, ?, ?, ?, ?)", [
                $request->txtid_admin,
                $request->txtuser,
                $request->txtrole,
                $request->txtemail,
                Hash::make($request->txtpassword)
            ]);

            if ($sql) {
                return back()->with("correcto", "Admin registrado correctamente");
            } else {
                return back()->with("incorrecto", "Error al registrar");
            }

        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                return back()->withErrors(['unique' => 'El nombre de usuario o correo electrónico ya está registrado.']);
            }
            return back()->with("incorrecto", "Error al registrar: " . $e->getMessage());
        }
    }

    public function updateAdmin(Request $request) {
       

        try {
            $sql = DB::update("UPDATE users SET username = ?, role = ?, email = ?, password = ? WHERE id_admin = ?", [
                $request->txtuser,
                $request->txtrole,
                $request->txtemail,
                Hash::make($request->txtpassword),
                $request->txtid_admin
            ]);

            if ($sql) {
                return back()->with("correcto", "Admin modificado correctamente");
            } else {
                return back()->with("incorrecto", "Error al modificar");
            }

        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                return back()->withErrors(['unique' => 'El nombre de usuario o correo electrónico ya está registrado.']);
            }
            return back()->with("incorrecto", "Error al modificar: " . $e->getMessage());
        }
    }

    public function deleteAdmin($id) {
        try {
            logger()->info('ID para eliminar: ' . $id);

            $sql = DB::delete("DELETE FROM users WHERE id = ?", [$id]);

            if ($sql) {
                return back()->with("correcto", "Admin eliminado correctamente");
            } else {
                return back()->with("incorrecto", "Error al eliminar");
            }

        } catch (QueryException $e) {
            return back()->with("incorrecto", "Error al eliminar: " . $e->getMessage());
        }
    }
}
