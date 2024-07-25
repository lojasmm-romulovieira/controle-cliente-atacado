import {useEffect, useMemo, useState} from 'react';
import PropTypes from 'prop-types';
import Select from 'react-select';

const SelectInput = (props) => {
    const {
        options,
        rawOptions,
        labelKey,
        valueKey,
        value,
        onChange,
        isDisabled,
        isMulti,
        isRequired,
        hideSelecionarTodos,
        hideDropdownIndicator,
        ...rest
    } = props;
    const [inputValue, setInputValue] = useState(isMulti ? [] : '');

    const _options = useMemo(() => {
        if (options.length) {
            return options;
        }

        return rawOptions.map(rawOption => ({
            value: `${rawOption[valueKey]}`,
            label: rawOption[labelKey]
        }));
    }, [options, rawOptions, labelKey, valueKey]);

    const _customComponents = useMemo(() => {
        let customComponents = {};

        if (hideDropdownIndicator) {
            customComponents.DropdownIndicator = null;
            customComponents.IndicatorSeparator = null;
        }

        return customComponents;

    }, [hideSelecionarTodos, hideDropdownIndicator]);


    useEffect(() => {
        let newValue = isMulti ? [] : '';

        if (value || parseInt(value) === 0) {
            newValue = isMulti
                ? _options.filter(option => value.includes(option.value))
                : _options.find(option => `${option.value}` === `${value}`);
        }

        setInputValue(newValue);

    }, [isMulti, _options, value]);

    const handleOnChange = (selected) => {
        let response = {
            target: {
                value: isMulti ? [] : ''
            }
        };

        if (selected) {
            response.target.value = isMulti
                ? selected.map(s => s.value)
                : selected.value;
        }

        onChange(response);
    }


    return <>
        <Select
            options={_options}
            value={inputValue}
            onChange={handleOnChange}
            placeholder="Selecione..."
            noOptionsMessage={() => 'Nenhuma opção disponível'}
            isDisabled={isDisabled}
            isMulti={isMulti}
            components={_customComponents}
            {...rest}
        />
        {!isDisabled && isRequired && (
            <input
                tabIndex={-1}
                autoComplete="off"
                style={{opacity: 0, height: 0, width: '100%', position: 'absolute'}}
                onChange={(e) => {
                }}
                value={inputValue}
                required
            />
        )}
    </>;
}

SelectInput.propTypes = {
    options: PropTypes.array,
    rawOptions: PropTypes.array,
    labelKey: PropTypes.string,
    valueKey: PropTypes.string,
    className: PropTypes.string,
    isMulti: PropTypes.bool,
    isRequired: PropTypes.bool,
    hideSelecionarTodos: PropTypes.bool,
    hideDropdownIndicator: PropTypes.bool,
};

SelectInput.defaultProps = {
    options: [],
    rawOptions: [],
    labelKey: 'slug',
    valueKey: 'id',
    className: 'w-100',
    isMulti: false,
    isRequired: false,
    hideSelecionarTodos: false,
    hideDropdownIndicator: false,
};

export default SelectInput;
