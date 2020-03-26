@extends('layouts.admin')

@section('crud')
    <form action="../modules" method="POST">
        <div class="side">
            <div class="value-inputs">
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input type="text" class="form-control" id="name" placeholder="PROG6">
                </div>
                <div class="form-group">
                    <label for="period">Periode</label>
                    <input type="number" class="form-control" id="period" placeholder="0">
                </div>
                <div class="form-group">
                    <label for="block">Blok</label>
                    <input type="number" class="form-control" id="block" placeholder="0">
                </div>
                <div class="form-group">
                    <label for="totalCredits">Te behalen studiepunten</label>
                    <input type="number" class="form-control" id="totalCredits" placeholder="0">
                </div>
                <div class="form-group">
                    <label for="credits">Behaalde studiepunten</label>
                    <input type="number" class="form-control" id="credits" placeholder="0">
                </div>
            </div>
            <div class="flexible-input">
                <label>Docenten</label>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Coordinator</th>
                        <th>Mijn docent</th>
                        <th>acties</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Stijn Smulders</td>
                        <td>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="coordinator1" name="coordinator">
                                <label class="custom-control-label ml-4" for="coordinator1"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="teacher1" name="teacher">
                                <label class="custom-control-label ml-4" for="teacher1"></label>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-danger" type="button"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Stijn Smulders</td>
                        <td>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="coordinator2" name="coordinator">
                                <label class="custom-control-label ml-4" for="coordinator2"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="teacher2" name="teacher">
                                <label class="custom-control-label ml-4" for="teacher2"></label>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-danger" type="button"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Stijn Smulders</td>
                        <td>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="coordinator3" name="coordinator">
                                <label class="custom-control-label ml-4" for="coordinator3"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="teacher3" name="teacher">
                                <label class="custom-control-label ml-4" for="teacher3"></label>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-danger" type="button"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="add">
                    <select>
                        <option value="1">Stijn Smulders</option>
                        <option value="2">Stijn Smulders</option>
                        <option value="3">Stijn Smulders</option>
                    </select>
                    <button  class="btn btn-success" type="button"><i class="fas fa-plus"></i></button>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>
@endsection
