(function () {
	var gdbFactory = function (jQuery) {
		var $ = jQuery;
		var GDB = function (modelsToMonitorObject, userOptionsObject) {
			var GDB = this;
			GDB.helpers = {
				isEventSupported: function (e) {
					var t = {
						select: "input",
						change: "input",
						submit: "form",
						reset: "form",
						error: "img",
						load: "img",
						abort: "img"
					};
					var n = document.createElement(t[e] || "div");
					e = "on" + e;
					var r = e in n;
					if (!r) {
						n.setAttribute(e, "return;");
						r = typeof n[e] == "function"
					}
					n = null;
					return r
				},
				escapeForRegEx: function (e) {
					return e.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&")
				}
			};
			var options = {
				rootElementSelectorString: "body",
				templateOpeningDelimiter: "<<",
				templateClosingDelimiter: ">>",
				realtime: true,
				renderOnInitialization: true,
				dataBindToAttr: "data-bindto",
				dataWatchingAttr: "data-watching",
				dataTemplateAttr: "data-gdb-template",
				dataParseWithAttr: "data-parsewith",
				bindAsTextOnly: false,
				insertPolyfills: true,
				debugLogging: false,
				modelChangeCallback: null,
				elementChangeCallback: null
			};
			if (userOptionsObject !== undefined) options = $.extend(options, userOptionsObject);
			if (options.insertPolyfills === true) loadPolyFills();
			var modelsToMonitor = modelsToMonitorObject;
			GDB.getBoundElementFromModelPath = function (e) {
				return $("[" + options.dataBindToAttr + "=" + e + "]")
			};
			GDB.getModelPathFromBoundElement = function (e) {
				var t = $(e);
				if (t.is("[" + options.dataBindToAttr + "]")) return t.attr(options.dataBindToAttr);
				else return false
			};
			GDB.getValueFromModelPath = function (e) {
				var t = $.extend(true, {}, modelsToMonitor);
				if (typeof e === "undefined") return;
				e = e.replace(/\[(\w+)\]/g, ".$1");
				e = e.replace(/^\./, "");
				var n = e.split(".");
				while (n.length) {
					var r = n.shift();
					if (r in t) {
						t = t[r]
					} else {
						return
					}
				}
				return t
			};
			GDB.render = function () {
				var e = "[" + options.dataBindToAttr + "],[" + options.dataWatchingAttr + "]";
				$(e).each(function () {
					setElementsToValue($(this), GDB.getValueFromModelPath($(this).attr(options.dataBindToAttr)))
				})
			};
			var setElementsToValue = function ($element, value) {
				$element.each(function () {
					if ($(this).is("[" + options.dataWatchingAttr + "][" + options.dataParseWithAttr + "]")) var newValue = eval("modelsToMonitor." + $(this).attr(options.dataParseWithAttr) + ".in()");
					else if ($(this).is("[" + options.dataWatchingAttr + "][" + options.dataTemplateAttr + "]")) {
						var modelLocations = $(this).attr(options.dataWatchingAttr).split(",");
						var template = $(this).attr(options.dataTemplateAttr);
						modelLocations.forEach(function (e, t) {
							template = template.replace(new RegExp(GDB.helpers.escapeForRegEx(options.templateOpeningDelimiter) + (t + 1) + GDB.helpers.escapeForRegEx(options.templateClosingDelimiter), "g"), GDB.getValueFromModelPath(e.trim()))
						});
						newValue = template
					} else newValue = value;
					if ($(this).is("input,select,textarea")) {
						if ($(this).is(":checkbox")) {
							$element.each(function () {
								var e = $(this);
								var t = false;
								newValue.forEach(function (n) {
									if (e.val() == n) {
										if (!e.is(":checked")) e.prop("checked", true);
										t = true
									}
								});
								if (!t) e.prop("checked", false)
							})
						} else if ($(this).is(":radio")) {
							$element.each(function () {
								var e = $(this);
								if (e.attr("value") == newValue) e.prop("checked", true);
								else e.prop("checked", false)
							})
						} else {
							if (!$(this).is("[" + options.dataWatchingAttr + "][" + options.dataTemplateAttr + "]:focus")) {
								if ($(this).val() != newValue) $(this).val(newValue)
							}
						}
					} else {
						if (!options.bindAsTextOnly) {
							if (!$(this).is("[" + options.dataWatchingAttr + "][" + options.dataTemplateAttr + "]:focus")) {
								if ($(this).html() != newValue) $(this).html(newValue)
							}
						} else {
							if (!$(this).is("[" + options.dataWatchingAttr + "][" + options.dataTemplateAttr + "]:focus")) {
								if ($(this).text() != newValue) $(this).text(newValue)
							}
						}
					}
				})
			};
			if (options.renderOnInitialization) GDB.render();
			var listenForEvents = (options.realtime ? (GDB.helpers.isEventSupported("input") ? "input" : "keyup") + " paste " : "") + " change blur";
			$(options.rootElementSelectorString).on(listenForEvents, "[" + options.dataBindToAttr + "],[" + options.dataTemplateAttr + "],[" + options.dataParseWithAttr + "]", function (e) {
				var $this = $(this);
				var value = "";
				if ($this.is("[" + options.dataBindToAttr + "],[" + options.dataParseWithAttr + "],[" + options.dataTemplateAttr + "]")) {
					var modelLocation = $this.attr(options.dataBindToAttr);
					if ($this.is("input,select,textarea")) {
						if ($this.is(":checkbox")) {
							value = $("[" + options.dataBindToAttr + "='" + $this.attr(options.dataBindToAttr) + "'][name='" + $this.attr("name") + "']:checked").map(function () {
								return $(this).val()
							}).toArray()
						} else {
							value = $this.val()
						}
					} else value = options.bindAsTextOnly ? $this.text() : $this.html();
					var rawValue = value;
					if (!$.isArray(value)) value = "'" + value.replace(/'/g, "\\'").replace(/\n/g, "\\n") + "'";
					else value = JSON.stringify(value);
					if (modelLocation) eval("modelsToMonitor." + modelLocation + "=" + value);
					if ($this.is("[" + options.dataParseWithAttr + "]")) eval("modelsToMonitor." + $this.attr(options.dataParseWithAttr) + ".out(" + value + ")");
					if ($this.is("[" + options.dataWatchingAttr + "][" + options.dataTemplateAttr + "]")) {
						var splitBys = $(this).attr(options.dataTemplateAttr).split(new RegExp(GDB.helpers.escapeForRegEx(options.templateOpeningDelimiter) + "\\d+" + GDB.helpers.escapeForRegEx(options.templateClosingDelimiter), "g"));
						var toDelete = [];
						splitBys.forEach(function (e, t) {
							if (e.length === 0) toDelete.push(t);
							else splitBys[t] = GDB.helpers.escapeForRegEx(e)
						});
						var subtract = 0;
						toDelete.forEach(function (e) {
							splitBys.splice(parseInt(e) - subtract, 1);
							subtract++
						});
						var modelLocationValuesArray = [];
						var valueArray = rawValue.split(new RegExp(splitBys.join("|"), "g"));
						var indexArray = $(this).attr(options.dataTemplateAttr).split(new RegExp(splitBys.join("|"), "g"));
						var modelLocations = $(this).attr(options.dataWatchingAttr).split(",");
						indexArray.forEach(function (e, t) {
							var n = parseInt(e.replace(new RegExp(GDB.helpers.escapeForRegEx(options.templateOpeningDelimiter) + "|" + GDB.helpers.escapeForRegEx(options.templateClosingDelimiter), "g"), "")) - 1;
							modelLocationValuesArray.push({
								location: modelLocations[n].trim(),
								value: typeof valueArray[t] === "undefined" ? '""' : JSON.stringify(valueArray[t])
							})
						});
						modelLocationValuesArray.forEach(function (modelLocationAndValue) {
							console.log("modelsToMonitor." + modelLocationAndValue.location + "=" + modelLocationAndValue.value);
							eval("modelsToMonitor." + modelLocationAndValue.location + "=" + modelLocationAndValue.value)
						})
					}
					if (options.debugLogging) console.log(modelLocation + " is now equal to " + value + ' as per changes made in the view as witnessed by the "' + e.type + '" event.');
					if (typeof options.elementChangeCallback === "function") {
						if (options.debugLogging) console.log("Bound element change callback executed for change in " + modelLocation);
						options.elementChangeCallback({
							locationPathString: modelLocation,
							$boundElement: $this,
							newValue: options.bindAsTextOnly ? $this.text() : $this.html()
						})
					} else {
						if (options.debugLogging) console.log("No callback supplied for bound element change thus no function was called")
					}
				}
			});
			var observeObjects = function (e, t, n) {
				n = n || [];
				$.each(e, function (e, r) {
					if (r !== null && (typeof r === "object" || r instanceof Array) &&
					function () {
						var e = true;
						n.forEach(function (t) {
							if (t === r) e = false
						});
						return e
					}()) {
						n.push(r);
						var i = "";
						if (typeof t === "undefined") i = "" + e;
						else {
							if (!isNaN(e)) i = t + "[" + e + "]";
							else i = t + "." + e
						}
						Object.observe(r, function (e) {
							e.forEach(function (e) {
								var t = !isNaN(e.name) ? "[" + e.name + "]" : "." + e.name;
								var s = i + t;
								var o = "[" + options.dataBindToAttr + "='" + s + "'],[" + options.dataWatchingAttr + "*='" + s + ",'],[" + options.dataWatchingAttr + "$='" + s + "']";
								var u = e.object[e.name];
								var a = e.type;
								var f = $(o);
								if (typeof u === "object" || u instanceof Array) {
									observeObjects(r, i, n)
								}
								setElementsToValue(f, u);
								if ($.isArray(u)) var l = JSON.stringify(u);
								else l = "'" + u + "'";
								if (options.debugLogging) console.log(i + t + " is now equal to " + l + " as observed in the model.");
								if (typeof options.modelChangeCallback === "function") {
									if (options.debugLogging) console.log("Model change callback executed for change in " + i + t);
									options.modelChangeCallback({
										locationPathString: s,
										$boundElements: f,
										newValue: u,
										oldValue: a
									})
								} else {
									if (options.debugLogging) console.log("No callback supplied for model change thus no function was called")
								}
							})
						});
						observeObjects(r, i, n)
					}
				})
			};
			observeObjects(modelsToMonitor)
		};
		var loadPolyFills = function () {
			if (!Object.observe) {
				(function (e, t) {
					function r(e) {
						return typeof Node === "object" ? e instanceof Node : e && typeof e === "object" && typeof e.nodeType === "number" && typeof e.nodeName === "string"
					}
					function i(e) {
						return typeof HTMLElement === "object" ? e instanceof HTMLElement : e && typeof e === "object" && e !== null && e.nodeType === 1 && typeof e.nodeName === "string"
					}
					var n = function (e) {
						var n = e.call(e),
							r = typeof r;
						return typeof t.alert === "object" ?
						function (t) {
							return n === e.call(t) || !! t && typeof t.toString == r && typeof t.valueOf == r && /^\s*\bfunction\b/.test("" + t)
						} : function (t) {
							return n === e.call(t)
						}
					}(e.prototype.toString);
					var s = function () {
						return !!t.setImmediate
					}();
					var o = function () {
						if (s) {
							return function (e) {
								return setImmediate(e)
							}
						} else {
							return function (e) {
								return setTimeout(e, 10)
							}
						}
					}();
					var u = function () {
						if (s) {
							return function (e) {
								clearImmediate(e)
							}
						} else {
							return function (e) {
								clearTimeout(e)
							}
						}
					}();
					var a = function (e) {
						return !isNaN(parseFloat(e)) && isFinite(e)
					};
					var f = function (e, t) {
						if (e === t) {
							return e !== 0 || 1 / e === 1 / t
						}
						return e !== e && t !== t
					};
					var l = function (e) {
						if (typeof e === "undefined") {
							return false
						}
						return "get" in e || "set" in e
					};
					var c = function (e) {
						if (typeof e === "undefined") {
							return false
						}
						return "value" in e || "writable" in e
					};
					var h = function (e, t) {
						if (typeof e !== "object") {
							throw new TypeError("Object.observeObject called on non-object")
						}
						if (n(t) === false) {
							throw new TypeError("Object.observeObject: Expecting function")
						}
						if (Object.isFrozen(t) === true) {
							throw new TypeError("Object.observeObject: Expecting unfrozen function")
						}
					};
					var p = function () {
						var e = [];
						var t = function (t, n) {
							h(t, n);
							Object.getNotifier(t).addListener(n);
							if (e.indexOf(t) === -1) {
								e.push(t)
							} else {
								Object.getNotifier(t)._checkPropertyListing()
							}
						};
						t.prototype.deliverChangeRecords = function (e) {
							Object.getNotifier(e).deliverChangeRecords()
						};
						e.lastScanned = 0;
						var n = function (e) {
							return function () {
								var t = 0,
									r = e.length,
									i = new Date,
									s = false;
								for (t = e.lastScanned; t < r && !s; t++) {
									Object.getNotifier(e[t])._checkPropertyListing();
									s = new Date - i > 100
								}
								e.lastScanned = t < r ? t : 0;
								o(n)
							}
						}(e);
						o(n);
						return t
					}();
					var d = function (e) {
						var t = [],
							n = [],
							r = false,
							i = [],
							s = [];
						var c = this;
						Object.defineProperty(c, "_watching", {
							enumerable: true,
							get: function (e) {
								return function () {
									return e
								}
							}(e)
						});
						var h = function (e, t) {
							var n = typeof e[t],
								r = Object.getOwnPropertyDescriptor(e, t);
							if (t === "getNotifier" || l(r) || !r.enumerable) {
								return false
							}
							if (e instanceof Array && a(t)) {
								var o = i.length;
								i[o] = t;
								s[o] = e[t];
								return true
							}(function (t, n) {
								i[t] = n;
								s[t] = e[n];
								Object.defineProperty(e, n, {
									get: function () {
										return s[t]
									},
									set: function (r) {
										if (!f(s[t], r)) {
											Object.getNotifier(e).queueUpdate(e, n, "updated", s[t]);
											s[t] = r
										}
									}
								})
							})(i.length, t);
							return true
						};
						c._checkPropertyListing = function (e) {
							var t = c._watching,
								n = Object.keys(t),
								r = 0,
								o = n.length;
							var u = [],
								f = i.slice(0),
								l = [];
							var p, d = !e,
								v, m, g, y;
							if (t instanceof Array) {
								y = i.length
							}
							for (r = 0; r < o; r++) {
								p = n[r];
								m = t[p];
								v = typeof m;
								if ((g = i.indexOf(p)) === -1) {
									if (h(t, p) && d) {
										c.queueUpdate(t, p, "new", null, t[p])
									}
								} else {
									if (t instanceof Array && a(p)) {
										if (s[g] !== m) {
											if (d) {
												c.queueUpdate(t, p, "updated", s[g], m)
											}
											s[g] = m
										}
									}
									f.splice(f.indexOf(p), 1)
								}
							}
							if (t instanceof Array && t.length !== y) {
								if (d) {
									c.queueUpdate(t, "length", "updated", y, t)
								}
							}
							if (d) {
								o = f.length;
								for (r = 0; r < o; r++) {
									g = i.indexOf(f[r]);
									c.queueUpdate(t, f[r], "deleted", s[g]);
									i.splice(g, 1);
									s.splice(g, 1)
								}
							}
						};
						c.addListener = function (e) {
							var n = t.indexOf(e);
							if (n === -1) {
								t.push(e)
							}
						};
						c.removeListener = function (e) {
							var n = t.indexOf(e);
							if (n > -1) {
								t.splice(n, 1)
							}
						};
						c.listeners = function () {
							return t
						};
						c.queueUpdate = function (e, t, n, r) {
							this.queueUpdates([{
								type: n,
								object: e,
								name: t,
								oldValue: r
							}])
						};
						c.queueUpdates = function (e) {
							var t = this,
								i = 0,
								s = e.length || 0,
								a;
							for (i = 0; i < s; i++) {
								a = e[i];
								n.push(a)
							}
							if (r) {
								u(r)
							}
							r = o(function () {
								r = false;
								t.deliverChangeRecords()
							})
						};
						c.deliverChangeRecords = function () {
							var e = 0,
								r = t.length,
								i;
							for (e = 0; e < r; e++) {
								if (t[e]) {
									if (t[e] === console.log) {
										console.log(n)
									} else {
										t[e](n)
									}
								}
							}
							n = []
						};
						c._checkPropertyListing(true)
					};
					var v = [],
						m = [];
					e.getNotifier = function (e) {
						var t = m.indexOf(e),
							n = t > -1 ? v[t] : false;
						if (!n) {
							t = m.length;
							m[t] = e;
							n = v[t] = new d(e)
						}
						return n
					};
					e.observe = function (e, t) {
						if (!i(e)) {
							return new p(e, t)
						}
					};
					e.unobserve = function (e, t) {
						h(e, t);
						var n = m.indexOf(e),
							r = n > -1 ? v[n] : false;
						if (!r) {
							return
						}
						r.removeListener(t);
						if (r.listeners().length === 0) {
							m.splice(n, 1);
							v.splice(n, 1)
						}
					}
				})(Object, this)
			}
		};
		return GDB
	};
	if (typeof define === "function" && define.amd) {
		define("gdb", ["jquery"], function (e) {
			return gdbFactory(e)
		})
	} else {
		jQuery(function () {
			window.GDB = gdbFactory(window.jQuery)
		})
	}
})()
