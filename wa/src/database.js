"use strict";
var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
var __generator = (this && this.__generator) || function (thisArg, body) {
    var _ = { label: 0, sent: function() { if (t[0] & 1) throw t[1]; return t[1]; }, trys: [], ops: [] }, f, y, t, g;
    return g = { next: verb(0), "throw": verb(1), "return": verb(2) }, typeof Symbol === "function" && (g[Symbol.iterator] = function() { return this; }), g;
    function verb(n) { return function (v) { return step([n, v]); }; }
    function step(op) {
        if (f) throw new TypeError("Generator is already executing.");
        while (g && (g = 0, op[0] && (_ = 0)), _) try {
            if (f = 1, y && (t = op[0] & 2 ? y["return"] : op[0] ? y["throw"] || ((t = y["return"]) && t.call(y), 0) : y.next) && !(t = t.call(y, op[1])).done) return t;
            if (y = 0, t) op = [op[0] & 2, t.value];
            switch (op[0]) {
                case 0: case 1: t = op; break;
                case 4: _.label++; return { value: op[1], done: false };
                case 5: _.label++; y = op[1]; op = [0]; continue;
                case 7: op = _.ops.pop(); _.trys.pop(); continue;
                default:
                    if (!(t = _.trys, t = t.length > 0 && t[t.length - 1]) && (op[0] === 6 || op[0] === 2)) { _ = 0; continue; }
                    if (op[0] === 3 && (!t || (op[1] > t[0] && op[1] < t[3]))) { _.label = op[1]; break; }
                    if (op[0] === 6 && _.label < t[1]) { _.label = t[1]; t = op; break; }
                    if (t && _.label < t[2]) { _.label = t[2]; _.ops.push(op); break; }
                    if (t[2]) _.ops.pop();
                    _.trys.pop(); continue;
            }
            op = body.call(thisArg, _);
        } catch (e) { op = [6, e]; y = 0; } finally { f = t = 0; }
        if (op[0] & 5) throw op[1]; return { value: op[0] ? op[1] : void 0, done: true };
    }
};
Object.defineProperty(exports, "__esModule", { value: true });
var set = require("../setting.json");
var mysql = require("mysql");
var util = require("util");
var queues = require("mysql-queues");
var db, con, results, query, select, update, send_cron;
con = mysql.createConnection({
    host: set.host,
    user: set.user,
    password: set.password,
    database: set.database,
    port: set.port,
    waitForConnections: true,
    connectionLimit: 100,
    maxIdle: 10,
    idleTimeout: 60000,
    queueLimit: 0,
    charset: "utf8mb4",
});
queues(con, true);
var database = /** @class */ (function () {
    function database() {
    }
    database.prototype.select = function () {
        return __awaiter(this, void 0, void 0, function () {
            return __generator(this, function (_a) {
                switch (_a.label) {
                    case 0: return [4 /*yield*/, select()];
                    case 1: return [2 /*return*/, _a.sent()];
                }
            });
        });
    };
    database.prototype.update = function (kode) {
        return __awaiter(this, void 0, void 0, function () {
            return __generator(this, function (_a) {
                switch (_a.label) {
                    case 0: return [4 /*yield*/, update(kode)];
                    case 1: return [2 /*return*/, _a.sent()];
                }
            });
        });
    };
    return database;
}());
exports.default = database;
function connection() {
    db = {
        query: function (sql, args) {
            return util.promisify(con.query).call(con, sql, args);
        },
        close: function () {
            return util.promisify(con.end).call(con);
        },
    };
    return db;
}
select = function () {
    return __awaiter(this, void 0, void 0, function () {
        var error_1;
        return __generator(this, function (_a) {
            switch (_a.label) {
                case 0:
                    _a.trys.push([0, 2, , 3]);
                    query = "SELECT * FROM tb_broadcast WHERE status='0' AND LEFT(nomor, 1) NOT IN ('0') ORDER BY datetime ASC LIMIT 1;";
                    return [4 /*yield*/, new Promise(function (resolve, reject) {
                            return connection().query(query, function (err, results) {
                                if (err) {
                                    reject(err);
                                }
                                else {
                                    if (results.length) {
                                        results = { status: true, kode: results[0].kd_broadcast, nomor: results[0].nomor, pesan: results[0].pesan, type: results[0].type };
                                        resolve(results);
                                    }
                                    else {
                                        results = { status: false, data: "data tidak ditemukan" };
                                        resolve(results);
                                    }
                                }
                            });
                        })];
                case 1:
                    results = _a.sent();
                    return [2 /*return*/, results];
                case 2:
                    error_1 = _a.sent();
                    console.log(error_1);
                    return [3 /*break*/, 3];
                case 3: return [2 /*return*/];
            }
        });
    });
};
update = function (kode) {
    return __awaiter(this, void 0, void 0, function () {
        return __generator(this, function (_a) {
            try {
                query = "UPDATE tb_broadcast SET status = '1' WHERE kd_broadcast = '".concat(kode, "';");
                connection().query(query, function (err, results) {
                    if (!err) {
                    }
                });
            }
            catch (error) { }
            return [2 /*return*/];
        });
    });
};
